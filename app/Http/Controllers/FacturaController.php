<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Factura;
use Illuminate\Support\Facades\Auth;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

    // Si es administrador, mostrar todas las facturas
    if ($user->role === 'admin') {
        // Asegúrate de que la relación 'producto' esté cargada
        $facturas = Factura::with('producto', 'producto.categoria')->get();
    } else {
        // Si es un usuario normal, solo sus facturas
        $facturas = Factura::with('producto', 'producto.categoria')
            ->where('usuario_id', $user->id)
            ->get();
    }

    // Datos para el gráfico
    $categorias = Categoria::with('productos.facturas')->get();

    // Calcular el total global de todas las facturas de productos
    $totalFacturas = $categorias->sum(fn($categoria) => $categoria->productos->sum(fn($producto) => $producto->facturas->sum('total')));

    // Calcular el gráfico con el porcentaje
    $facturasPorCategoria = $categorias->map(function ($categoria) use ($totalFacturas) {
        $total = $categoria->productos->sum(fn($p) => $p->facturas->sum('total'));
        return [
            'categoria' => $categoria->nombre,
            'total_facturas' => $total,
            'porcentaje' => $total > 0 ? ($total / $totalFacturas) * 100 : 0,
        ];
    });

    // Productos comprados (con nombre del producto)
    $productosComprados = Factura::selectRaw('producto_id, SUM(cantidad) as cantidad, SUM(total) as valor')
        ->groupBy('producto_id')
        ->with('producto') // Carga la relación con el producto
        ->get();

    return view('factura.reporte', compact('facturas', 'facturasPorCategoria', 'productosComprados', 'categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //dd($id);
        //
       $producto = Producto::findOrFail($id); // Busca el producto por su ID
       $categoria = Categoria::findOrFail($producto->categoria_id); // Encuentra la categoría relacionada
       $usuario = Auth::user(); // Usuario autenticado

        return view('factura.index', compact('producto', 'categoria', 'usuario')); // Pasa las variables a la vista
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validar los datos de entrada
    $request->validate([
        'producto_id' => 'required|exists:productos,id',
        'cantidad' => 'required|integer|min:1',
        'valor' => 'required|numeric|min:0',
    ]);

    // Obtener el producto
    $producto = Producto::findOrFail($request->producto_id);

    // Verificar si hay suficiente stock
    if ($producto->stock < $request->cantidad) {
        return redirect()->back()->withErrors('No hay suficiente stock para esta compra.');
    }

    // Calcular el total
    $total = $request->cantidad * $request->valor;

    // Crear la factura
    $factura = new Factura();
    $factura->usuario_id = Auth::id();
    $factura->producto_id = $request->producto_id;
    $factura->cantidad = $request->cantidad;
    $factura->observacion = $request->obser;
    $factura->total = $total;
    $factura->save();

    // Descontar la cantidad del stock
    $producto->stock -= $request->cantidad; // Restar la cantidad vendida del stock
    $producto->save(); // Guardar el cambio en la base de datos

    
    return redirect()->route('productos.index', ['categoria_id' => $producto->categoria_id])
        ->with('success', "Factura generada correctamente. ID: {$factura->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

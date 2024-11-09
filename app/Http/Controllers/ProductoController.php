<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categoria_id)
    {
        $productos = DB::table('productos')
        
        ->join('categorias','productos.categoria_id','=','categorias.id')
        ->where('productos.categoria_id', $categoria_id)
        ->select('productos.*', 'categorias.nombre as categoria_nombre')
        ->get();


        //return view('producto.index', ['productos' => $productos]);


       return view('producto.index', ['productos' => $productos, 'categoria_nombre' => $productos->first()->categoria_nombre]);
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $categorias=DB::table('categorias')
        ->orderby ('nombre')
        ->get();
        return view('producto.new',['categorias'=>$categorias]);
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto = new Producto();

        $producto->nombre = $request->name;
        $producto->categoria_id =$request->categoria;
        $producto->descripcion = $request->descri;
        $producto->price = $request->price;
        $producto->stock = $request->stock;

         // Manejar la carga de la foto
         if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName(); // Obtener el nombre original del archivo
            $file->move(public_path('img/productos'), $filename); // Mover el archivo directamente a public/img/productos
            $producto->foto = $filename; // Guardar la ruta en la base de datos
        }

        $producto->save();

        $productos = DB::table('productos')
        ->join('categorias','productos.categoria_id','=','categorias.id')
        ->select('productos.*',"categorias.nombre")
        ->get();
        
        return view('dashboard');
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

        $producto = Producto::find($id);
        $categorias =DB::table('categorias')
        ->orderBy('nombre')
        ->get();
        return view('producto.edit', ['producto' => $producto, 'categorias' => $categorias]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $producto = Producto::find($id);

        $producto->nombre = $request->name;
        $producto->categoria_id =$request->categoria;
        $producto->descripcion = $request->descri;
        //$producto->foto = $request->foto;
        $producto->price = $request->price;
        $producto->stock = $request->stock;

         // Manejar la carga de la foto
         if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName(); // Obtener el nombre original del archivo
            $file->move(public_path('img/productos'), $filename); // Mover el archivo directamente a public/img/productos
            $producto->foto = $filename; // Guardar la ruta en la base de datos
        }

        $producto->save();

        $productos = DB::table('productos')
        ->join('categorias','productos.categoria_id','=','categorias.id')
        ->select('productos.*',"categorias.nombre")
        ->get();
        
        return redirect()->route('productos.index', ['categoria_id' => $producto->categoria_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto= Producto::find($id);
        $producto->delete();

        $productos = DB::table('productos')
        ->join('categorias','productos.categoria_id','=','categorias.id')
        ->select('productos.*',"categorias.nombre")
        ->get();
        return redirect()->route('productos.index', ['categoria_id' => $producto->categoria_id]);


    }
}

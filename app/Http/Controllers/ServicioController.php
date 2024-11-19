<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categoria_id)
    {
        $servicios = DB::table('servicios')
        
        ->join('categorias','servicios.categoria_id','=','categorias.id')
        ->where('servicios.categoria_id', $categoria_id)
        ->select('servicios.*', 'categorias.nombre as categoria_nombre')
        ->get();


        //return view('producto.index', ['productos' => $productos]);


       return view('servicio.index', ['servicios' => $servicios, 'categoria_nombre' => $servicios->first()->categoria_nombre]);
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
        return view('servicio.new',['categorias'=>$categorias]);
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $servicio = new Servicio();

        $servicio->nombre = $request->name;
        $servicio->categoria_id =$request->categoria;
        $servicio->descripcion = $request->descri;
        $servicio->descripcion2 = $request->descri2;
        $servicio->price = $request->price;
        $servicio->incluye = $request->incluye;

         // Manejar la carga de la foto
         if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName(); // Obtener el nombre original del archivo
            $file->move(public_path('img/servicios'), $filename); // Mover el archivo directamente a public/img/productos
            $servicio->foto = $filename; // Guardar la ruta en la base de datos
        }

        $servicio->save();

        $servicios = DB::table('servicios')
        ->join('categorias','servicios.categoria_id','=','categorias.id')
        ->select('servicios.*',"categorias.nombre")
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

        $servicio = Servicio::find($id);
        $categorias =DB::table('categorias')
        ->orderBy('nombre')
        ->get();
        return view('servicio.edit', ['servicio' => $servicio, 'categorias' => $categorias]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $servicio = Servicio::find($id);

        $servicio->nombre = $request->name;
        $servicio->categoria_id =$request->categoria;
        $servicio->descripcion = $request->descri;
        $servicio->descripcion2 = $request->descri2;
        $servicio->price = $request->price;
        $servicio->incluye = $request->incluye;

         // Manejar la carga de la foto
         if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName(); // Obtener el nombre original del archivo
            $file->move(public_path('img/servicios'), $filename); // Mover el archivo directamente a public/img/productos
            $servicio->foto = $filename; // Guardar la ruta en la base de datos
        }

        $servicio->save();

        $servicios = DB::table('servicios')
        ->join('categorias','servicios.categoria_id','=','categorias.id')
        ->select('servicios.*',"categorias.nombre")
        ->get();
        
        return redirect()->route('servicios.index', ['categoria_id' => $servicio->categoria_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $servicio= Servicio::find($id);
        $servicio->delete();

        $servicios = DB::table('servicios')
        ->join('categorias','servicios.categoria_id','=','categorias.id')
        ->select('servicios.*',"categorias.nombre")
        ->get();
        return redirect()->route('servicios.index', ['categoria_id' => $servicio->categoria_id]);


    }
}

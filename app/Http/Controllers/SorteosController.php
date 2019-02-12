<?php

namespace App\Http\Controllers;

use App\Sorteo;
use Illuminate\Http\Request;

class SorteosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consultar los Sorteos
        $sorteos = Sorteo::all();

        //mostrar la vista con los sorteos
        return view('sorteos.list')
            ->with('sorteos', $sorteos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sorteos.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //crear un objeto de tipo sorteos con sus atributos
        Sorteo::create([
            'fecha_sorteo' => $request->input('fecha_sorteo'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_cierre' => $request->input('fecha_cierre'),
            'premio1' => $request->input('premio1'),
            'premio2' => $request->input('premio2'),
            'premio3' => $request->input('premio3'),
        ]);

        return redirect('/home')->with('status', 'Sorteo Registrado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sorteo = Sorteo::find($id);
        
        return view('sorteos.participantes')
            ->with('participantes', $sorteo->participantes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sorteo $sorteo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sorteo $sorteo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sorteo  $sorteo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sorteo $sorteo)
    {
        //
    }

    public function participar(Request $request)
    {
        //generar la participacion de un usuario
        $numero = rand(1, 100);
        $usuario = \Auth::user();
        //obtengo el sorteo
        $sorteo = Sorteo::find($request->input('sorteo_id'));

        //guardo la participacion
        $sorteo->participantes()->attach( [ $usuario->id => ['numero' => $numero] ]);

        return redirect('/home')->with('status', 'Estas Participando en el sorteo del '.$sorteo->fecha_sorteo);

    }
}

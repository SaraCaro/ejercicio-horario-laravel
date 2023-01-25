<?php

namespace App\Http\Controllers;
use App\Models\Horas;
use Illuminate\Support\Facades\Auth;
use App\Models\Asignatura;

use Illuminate\Http\Request;

class HorasController extends Controller
{

    protected $horas;
    public function __construct(Horas $horas)
    {
        $this->horas = $horas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horas = $this->horas->obtenerHoras();
        return view('horas', ['horas' => $horas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignatura = new Asignatura();
        $asignaturas = $asignatura->obtenerAsignaturas(); 
        return view('horas.create', ['asignaturas' => $asignaturas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horas = new Horas($request->all());
        $horas->save();

        return redirect()->action([HorasController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horas = $this->horas->obtenerHorasPorId($id);
        return view('horas.edit', ['horas' => $horas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horas = Hora::find($id);
        $horas->fill($request->all());
        $horas->save();
        return redirect()->action([HorasController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horas = Hora::find($id);
        $horas->delete();
        return redirect()->action([HorasController::class, 'index']);
    }
}

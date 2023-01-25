<?php

namespace App\Http\Controllers;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    protected $asignaturas;
    
    public function __construct(Asignatura $asignaturas)
    {
        $this->asignaturas = $asignaturas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = $this->asignaturas->obtenerAsignaturas();
        return view('asignaturas', ['asignaturas' => $asignaturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignaturas = new Asignatura($request->all(), $id);
        $asignaturas->save();

        return redirect()->action([AsignaturaController::class, 'index']);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignaturas = $this->obtenerAsignaturaPorId($id);
        return view('asignaturas.ver', ['asignatura' => $asignaturas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaturas = $this->asignaturas->obtenerAsignaturaPorId($id);
        return view('asignaturas.edit', ['asignatura' => $asignaturas]);
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
        $asignaturas = Asignatura::find($id);
        $asignaturas->fill($request->all());
        $asignaturas->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asignaturas = Asignatura::find($id);
        $asignaturas->delete();
        return redirect()->action([AsignaturaController::class, 'index']);
    }
}

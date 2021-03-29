<?php

namespace App\Http\Controllers\Sacramentos;

use App\Http\Controllers\Controller;
use App\Models\Confirmacion;
use Illuminate\Http\Request;

class ConfirmacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmaciones = Confirmacion::orderBy('id','Desc')->paginate(20);
        return view('sacramentos.confirmacion.index', compact('confirmaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sacramentos.confirmacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'name'      => 'required',
          'apePat'    => 'required',
          'apeMat'    => 'required',
          'obispo' => 'required',
          'fechaC'    => 'required',
          'lugarB'     => 'required',
          'fechaB'    => 'required',
        ]);
        $confirmacion = new Confirmacion();

        $confirmacion->name = $request->name;
        $confirmacion->apePat = $request->apePat;
        $confirmacion->apeMat = $request->apeMat;
        $confirmacion->obispo = $request->obispo;
        $confirmacion->fechaC = $request->fechaC;
        $confirmacion->namePat = $request->namePat;
        $confirmacion->nameMat = $request->nameMat;
        $confirmacion->padrino = $request->padrino;
        $confirmacion->madrina = $request->madrina;
        $confirmacion->lugarN = $request->lugarN;
        $confirmacion->fechaN = $request->fechaN;
        $confirmacion->lugarB = $request->lugarB;
        $confirmacion->fechaB = $request->fechaB;

        $confirmacion->save();
        return redirect()->route('confirmacion.index')->with('status_success','Boleta Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Confirmacion $confirmacion)
    {
        return view('sacramentos.confirmacion.show', compact('confirmacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Confirmacion $confirmacion)
    {
        return view('sacramentos.confirmacion.edit', compact('confirmacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Confirmacion $confirmacion)
    {
        $validatedData = $request->validate([
          'name'      => 'required',
          'apePat'    => 'required',
          'apeMat'    => 'required',
          'obispo'    => 'required',
          'fechaC'    => 'required',
          'lugarB'    => 'required',
          'fechaB'    => 'required',
        ]);
            //dd($bautismo);
        $confirmacion->update($request->all());

        return redirect()->route('confirmacion.index')->with('status_success','Boleta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Confirmacion $confirmacion)
    {
        $this->authorize('haveaccess','confirmacion.destroy');
        $confirmacion->delete();
        return redirect()->route('confirmacion.index')->with('status_success','Boleta eliminada!');
    }
}

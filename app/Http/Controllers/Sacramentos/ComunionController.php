<?php

namespace App\Http\Controllers\Sacramentos;

use App\Http\Controllers\Controller;
use App\Models\Comunion;
use Illuminate\Http\Request;

class ComunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comuniones = Comunion::orderBy('id','Desc')->paginate(20);
        return view('sacramentos.comunion.index', compact('comuniones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sacramentos.comunion.create');
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
          'fechaC'    => 'required',
          'sacerdote' => 'required',
          'lugarB'     => 'required',
          'fechaB'    => 'required',
        ]);
        $comunion = new Comunion();

        $comunion->name = $request->name;
        $comunion->apePat = $request->apePat;
        $comunion->apeMat = $request->apeMat;
        $comunion->fechaC = $request->fechaC;
        $comunion->sacerdote = $request->sacerdote;
        $comunion->namePat = $request->namePat;
        $comunion->nameMat = $request->nameMat;
        $comunion->padrino = $request->padrino;
        $comunion->madrina = $request->madrina;
        $comunion->lugarB = $request->lugarB;
        $comunion->fechaB = $request->fechaB;

        $comunion->save();
        return redirect()->route('comunion.index')->with('status_success','Boleta Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comunion $comunion)
    {
          return view('sacramentos.comunion.show', compact('comunion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunion $comunion)
    {
          return view('sacramentos.comunion.edit', compact('comunion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comunion $comunion)
    {
          $validatedData = $request->validate([
            'name'      => 'required',
            'apePat'    => 'required',
            'apeMat'    => 'required',
            'fechaC'    => 'required',
            'sacerdote' => 'required',
            'lugarB'     => 'required',
            'fechaB'    => 'required',
          ]);
            //dd($bautismo);
          $comunion->update($request->all());

          return redirect()->route('comunion.index')->with('status_success','Boleta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comunion $comunion)
    {
        $this->authorize('haveaccess','comunion.destroy');
        $comunion->delete();

        return redirect()->route('comunion.index')->with('status_success','Boleta eliminada!');
    }
}

<?php

namespace App\Http\Controllers\Sacramentos;

use App\Http\Controllers\Controller;
use App\Models\Bautismo;
use Illuminate\Http\Request;

class BautismoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('sacramentos.bautismo.index');

        $bautismo = Bautismo::orderBy('id','Desc')->paginate(20);
        return view('sacramentos.bautismo.index', compact('bautismo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sacramentos.bautismo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
          'name'      => 'required',
          'apePat'    => 'required',
          'apeMat'    => 'required',
          'lugar'     => 'required',
          'fechaN'    => 'required',
          'fechaB'    => 'required',
          'sacerdote' => 'required',
          'rc'        => 'required',
        ]);
        $bautismo = new Bautismo();

        $bautismo->name = $request->name;
        $bautismo->apePat = $request->apePat;
        $bautismo->apeMat = $request->apeMat;
        $bautismo->namePat = $request->namePat;
        $bautismo->nameMat = $request->nameMat;
        $bautismo->lugar = $request->lugar;
        $bautismo->fechaN = $request->fechaN;
        $bautismo->fechaB = $request->fechaB;
        $bautismo->sacerdote = $request->sacerdote;
        $bautismo->padrino = $request->padrino;
        $bautismo->madrina = $request->madrina;
        $bautismo->rc = $request->rc;

        $bautismo->save();
        return redirect()->route('bautismo.index')->with('status_success','Boleta Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bautismo $bautismo)
    {
        return view('sacramentos.bautismo.show', compact('bautismo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bautismo $bautismo)
    {
        return view('sacramentos.bautismo.edit', compact('bautismo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bautismo $bautismo)
    {
        $validatedData = $request->validate([
          'name'      => 'required',
          'apePat'    => 'required',
          'apeMat'    => 'required',
          'lugar'     => 'required',
          'fechaN'    => 'required',
          'fechaB'    => 'required',
          'sacerdote' => 'required',
          'rc'        => 'required',
        ]);
        //dd($bautismo);
        $bautismo->update($request->all());

        return redirect()->route('bautismo.index')->with('status_success','Boleta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bautismo $bautismo)
    {
      //$this->authorize('haveaccess','role.destroy');
       $bautismo->delete();

       return redirect()->route('bautismo.index')->with('status_success','Boleta eliminada!');
    }
}

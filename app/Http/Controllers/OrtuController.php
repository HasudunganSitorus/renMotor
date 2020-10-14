<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use App\Models\Cucu;
use DB;
use Illuminate\Http\Request;

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*         $ortus = Ortu::with('cucu')->get();
        return view('ortu.index', compact('ortus')); */
        
        $ortu = Ortu::all();
        return OrtuResource::collection($ortu);
 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ortus = Ortu::all();
        return view('Ortu.create', compact('ortus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'nama' => 'required',
            'jenisKelamin' => 'required'
        ]);

        $ortus= Ortu::create($request->all());
        return redirect()->route('ortu.index')->with('status', 'Data berhasil diTambahkan..');
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
        $ortu = Ortu::find($id);
        return view('ortu.edit', compact('ortu'));
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
        $ortus = Ortu::find($id);
        $this->validate($request,[
            'nama' => 'required',
            'jenisKelamin' => 'required'
        ]);

        $ortus->update($request->all());
        return redirect()->route('ortu.index')->with('status', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ortu::find($id)->delete();
        return redirect()->route('ortu.index')->with('status','Data Berhasil di Hapus');

    }
}

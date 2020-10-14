<?php

namespace App\Http\Controllers;
use App\Models\Cucu;
use App\Models\Ortu;
use Illuminate\Http\Request;

class CucuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*         $cucus = Cucu::with('ortu')->get();
        return view('cucu.index', compact('cucus')); */

        $cucu = Cucu::all();
        return CucuResource::collection($cucu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ortus = Ortu::orderBy('nama')->get();
        return view('cucu.create', compact('ortus'));
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
            'jenisKelamin' => 'required',
            'ortu_id' => 'required'

        ]);

        Cucu::create($request->all());
        return redirect()->route('cucu.index')->with('status', 'Data Berhasil di Tambahkan..');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cucu = Cucu::find($id)->delete();;
        return redirect()->route('cucu.index')->with('status','Data Berhasil di Hapus');
    }
}

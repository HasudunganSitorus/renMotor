<?php

namespace App\Http\Controllers;
use App\Models\Motor;
use App\Models\Kondisi;
use App\Models\Penyewa;
use App\Models\Ulasan;
use DB;
use App\Models\Perlengkapan;
use Illuminate\Http\Request;

class motorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 'penyewa' adalah relasi dari motor
        $motors = Motor::all();
        return view('motors.index', compact('motors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $motor = Motor::all();
        $penyewas =Penyewa::all();
        $perlengkapans = Perlengkapan::all();
        return view('motors.create', compact('motor','penyewas', 'perlengkapans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motors = Motor::all();

        $nama = $request->nama;
        $noPlat = $request->noPlat;
        $avatar = $request->avatar;
        $kondisi = $request->kondisi;
        $penyewa_id = $request->penyewa_id;
        $perlengkapan_id = $request->perlengkan_id;
        
        $motors->nama = $nama;
        $motors->noPlat = $noPlat;
        $motors->avatar = $avatar;
        $motors->kondisi = $kondisi;
        $motors->penyewa_id = $penyewa_id;
        $motor->perlengkapan_id = $perlengkapan_id;
        $motors->save();

        return redirect()->route('motors.index')->with('notif', 'Data Berhasil di input');
    }

    public function tambah($id)
    {
        return redirect()->route();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ulasan =Motor::with('ulasan')-get();
        // $ulasanById = Ulasan::find($ulasan)->get();
        $ulasanById = Ulasan::where('motor_id',1)->get('keterangan');
        $ulasan = Motor::find($id)->ulasan;
        $kondisi = Motor::find($id)->kondisi;
        $motors = Motor::find($id);
        $rating = Ulasan::find($id)->rating;
        // dd($ulasanById);
        return view('motors.show', compact('motors','ulasan', 'ulasanById', 'kondisi' ,'rating'));
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
        //
    }
}

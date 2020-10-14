<?php

namespace App\Http\Controllers;
use App\Models\Motor;
use App\Models\Kondisi;
use App\Models\Penyewa;
use App\Models\Ulasan;
use DB;
use App\Models\Rating;
use App\Models\Perlengkapan;
use App\Http\Resource\MotorResource;
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
        $motors = DB::table('motor')->select('nama', 'noPlat', 'id')->get();
        // dd($motors);
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
        // $penyewas =Penyewa::all();
        // $perlengkapans = Perlengkapan::all();
        return view('motors.create', compact('motor'));
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
            'nama'  =>  'required',
            'noPlat'=>  'required',
            'kondisi'=> 'required',
            'avatar'=>  'required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $motors = new Motor();
        // Validasi
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $nama = str_slug($request->nama).'.'.$avatar->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $avatarPath = $destinationPath. "/" .$nama;
            $image = move($avatar,$nama);
            $motors->avatar = $nama;     
        }
        $motors->nama = $request->nama;
        $motors->noPlat = $request->noPlat;
        $motors->kondisi = $request->kondisi;
        $motors->save();
        // $penyewa_id = $request->penyewa_id;
        // $perlengkapan_id = $request->perlengkan_id;
        
        // $motors->nama = $nama;
        // $motors->noPlat = $noPlat;
        // $motors->avatar = $avatar;
        // $motors->kondisi = $kondisi;
        // $motors->penyewa_id = $penyewa_id;
        // $motor->perlengkapan_id = $perlengkapan_id;

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
        $penyewa = Penyewa::where('nama')->get();
        $ulasanCount = Ulasan::all();
        $ulasanById = Ulasan::where('motor_id', $id)->get( 'keterangan');
        $ulasan = Motor::find($id)->ulasan;
        $kondisi = Motor::find($id)->kondisi;
        $motors = Motor::find($id);
        $ratings = Rating::where('motor_id',$id)->get('jumlah');
        return view('motors.show', compact('ulasanCount','motors','ulasan', 'ulasanById', 'kondisi' ,'ratings'));
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

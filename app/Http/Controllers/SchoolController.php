<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\CompetenceTeacher;
use App\Models\Registry;
use App\Models\Requisite;
use DB;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**P
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $require = 5;
        // $registies = Requisite::with('student')->get();
        $requisite = Requisite::where('subjectclass_id', 'LIKE', '%'.$require.'%')->with( 'subjectClass')->get(); 
        // $requisite = Requisite::where('subjectclass_id', 'LIKE', '%'.$require.'%')->with( 'subjectClass')->get(); 
        return view('school.index', compact('requisite'));
        // dd($requisite);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}

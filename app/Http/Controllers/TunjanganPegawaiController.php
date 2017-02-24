<?php

namespace App\Http\Controllers;

use /*Illuminate\Http\*/Request;
use App\TunjanganPegawai;
use App\Tunjangan;
use App\Pegawai;

class TunjanganPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tpegawai=TunjanganPegawai::with('Tunjangan','Pegawai')->get();
        return view('tunjanganpegawai.index', compact('tpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangan=Tunjangan::all();
        $pegawai=Pegawai::all();
        return view('tunjanganpegawai.create', compact('tunjangan','pegawai'));
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
        $tpegawai=Request::all();
        TunjanganPegawai::create($tpegawai);
        return redirect('tunjangan-pegawai');
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
        $tpegawai=TunjanganPegawai::find($id);
        $tunjangan=Tunjangan::all();
        $pegawai=Pegawai::all();
        return view('tunjanganpegawai.edit', compact('tpegawai','tunjangan','pegawai'));

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
        $tpegawai=Request::all();
        $tpegawaiUpdate=TunjanganPegawai::find($id);
        $tpegawaiUpdate->update($tpegawai);
        return redirect('tunjangan-pegawai');
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
        $tpegawai=TunjanganPegawai::find($id)->delete();
        return redirect('tunjangan-pegawai');
    }
}

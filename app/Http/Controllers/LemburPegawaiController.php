<?php

namespace App\Http\Controllers;

use /*Illuminate\Http\*/Request;
use App\LemburPegawai;
use App\KategoriLembur;
use App\Pegawai;

class LemburPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lpegawai=LemburPegawai::with('KategoriLembur','Pegawai')->get();
        return view('lemburpegawai.index',compact('lpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategoril=KategoriLembur::all();
        $pegawai=Pegawai::all();
        return view('lemburpegawai.create',compact('kategoril','pegawai'));
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
        $lpegawai=Request::all();
        LemburPegawai::create($lpegawai);
        return redirect('lembur-pegawai');
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
        $lpegawai=LemburPegawai::find($id);
        $kategoril=KategoriLembur::all();
        $pegawai=Pegawai::all();
        return view('lemburpegawai.edit',compact('lpegawai','kategoril','pegawai'));
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
        $lpegawai=Request::all();
        $lpegawaiUpdate=LemburPegawai::find($id);
        $lpegawaiUpdate->update($lpegawai);
        return redirect('lembur-pegawai');
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
        $lpegawai=LemburPegawai::find($id)->delete();
        return redirect('lembur-pegawai');
    }
}

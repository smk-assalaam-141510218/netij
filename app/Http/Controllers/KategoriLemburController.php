<?php

namespace App\Http\Controllers;

use /*Illuminate\Http\*/Request;
use App\KategoriLembur;
use App\Jabatan;
use App\Golongan;

class KategoriLemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoril=KategoriLembur::with('Jabatan','Golongan')->get();
        return view('kategorilembur.index', compact('kategoril'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan=Jabatan::all();
        $golongan=Golongan::all();
        return view('kategorilembur.create',compact('jabatan','golongan'));
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
        $kategoril=Request::all();
        KategoriLembur::create($kategoril);
        return redirect('lembur-kategori');
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
        $kategoril=KategoriLembur::find($id);
        $jabatan=Jabatan::all();
        $golongan=Golongan::all();
        return view('kategorilembur.edit',compact('kategoril','jabatan','golongan'));
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
        $kategoril=Request::all();
        $kategorilUpdate=KategoriLembur::find($id);
        $kategorilUpdate->update($kategoril);
        return redirect('lembur-kategori');
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
        $kategoril=KategoriLembur::find($id)->delete();
        return redirect('lembur-kategori');
    }
}

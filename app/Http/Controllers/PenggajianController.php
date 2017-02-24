<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/
use App\Tunjangan;
use App\TunjanganPegawai;
use App\LemburPegawai;
use App\Penggajian;
use Request;


class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(request()->has('petugas_penerima'))
        {
            $penggajian=Penggajian::where('petugas_penerima', request('petugas_penerima'))->paginate(2);
        }

        $penggajian=Penggajian::with('Tunjangan')->get();
        return view('penggajian.index', compact('penggajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tun=Tunjangan::all();
        return view('penggajian.create', compact('tun'));
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
        $penggajian=Request::all();
        Penggajian::create($penggajian);
        return redirect('penggajian');
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
        $penggajian=Penggajian::find($id);
        $tun=Tunjangan::all();
        return view('penggajian.edit', compact('penggajian','tun'));
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
        $penggajian=Request::all();
        $penggajianUpdate=Penggajian::find($id);
        $penggajianUpdate->update($penggajian);
        return redirect('penggajian');
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
        $penggajian=Penggajian::find($id)->delete();
        return redirect('penggajian');
    }
}

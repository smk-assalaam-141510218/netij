<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Input;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $pegawai=Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user=User::all();
        $jabatan=Jabatan::all();
        $golongan=Golongan::all();
        return view('pegawai.create',compact('user','jabatan','golongan'));
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
        $file=Input::file('photo');
        $destination=public_path().'/gambar ';
        $filename=$file->getClientOriginalName();
        $uploadsuccess=$file->move($destination,$filename);

        if(Input::hasFile('photo')){
            $user=User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
        ]);
            $pegawai= new Pegawai;
            $pegawai->nip=$request->get('nip');
            $pegawai->user_id=$user->id;
            $pegawai->jabatan_id=$request->get('jabatan_id');
            $pegawai->golongan_id=$request->get('golongan_id');
            $pegawai->photo=$filename;
            $pegawai->save();
        }
        return redirect('pegawai');
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
        $pegawai=Pegawai::find($id);
        $user=User::find($id);
        $jabatan=Jabatan::all();
        $golongan=Golongan::all();
        return view('pegawai.edit', compact('pegawai','user','jabatan','golongan'));
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
        
        $file=Input::file('photo');
        $destination=public_path().'/gambar ';
        $filename=$file->getClientOriginalName();
        $uploadsuccess=$file->move($destination,$filename);

        if(Input::hasFile('photo')){
            $user=User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permission' => $request->get('permission'),
            'password' => bcrypt($request->get('password')),
        ]);
            $pegawai=Pegawai::find($id);
            $pegawai->nip=$request->get('nip');
            $pegawai->user_id=$user->id;
            $pegawai->jabatan_id=$request->get('jabatan_id');
            $pegawai->golongan_id=$request->get('golongan_id');
            $pegawai->photo=$filename;
            $pegawai->update();
        }
        return redirect('pegawai');
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
        $pegawai = Pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}


@extends('layouts.app')
@section('penggajian')
    active
@endsection
@section('content')
<div class="col-md-15 col-md-offset-0">
            <div class="panel panel-danger">
            <div class="panel-heading">
                <h1><center><div class="panel-title">Pencarian Pegawai</div></center></h1>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="{{ url('query') }}" method="GET"">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('q') ? ' has-error' : '' }}">

                            
                               <center> <select name="q">
                                    <option value="">cari</option>
                                    @foreach($pegawai as $data)
                                    <option value="{{$data->id}}">{{$data->nip}}{{$data->user->name}}</option>
                                    @endforeach
                                </select></center>
                                @if ($errors->has('q'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('q') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                                <center><button type="submit" class="btn btn-danger ">
                                    Cari
                                </button></center>
                            </div>
                        </div>
                        <div class="section">
<div class="card-panel green white-text">Hasil pencarian : <b>{{$query}}</b></div>
    @foreach($penggajian as $data)
    <div class="row">
  <div class="col s12">
                    </form>
                </div>
            </div>
        </div>
            
  </div>
 </div>
 @endforeach
</div>
 
 
 
@endsection
@section('content1')
    <div class="col-md-15 col-md-offset-0">
                    <div class="panel panel-danger">
                        <div class="panel-body">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-danger">
            <div class="panel panel-heading">
       <center><div class="panel-title">Data Penggajian</div></center>
                 <div class="panel-body">
            
            <table border="2" class="table table-success table-border table-hover">
          <thead >
           <tr>
            <th>No</th>
            <th>Pegawai</th>
            <th>Jumlah Uang Tunjangan</th>
            <th>Jumlah Jam Lembur</th>
            <th>Jumlah Uang Lembur</th>
            <th>gaji Pokok</th>
            <th>Total Gaji</th>
            <th>Tanggal Pengambilan</th>
            <th>Status Pengambilan</th>
            <th>Petugas Penerimaan</th>
           </tr>
          </thead>
          @php $no=1;   @endphp
          <tbody>
           @foreach($pegawai as $data)
           <tr>
            <td>{{$no++}}</td>
            <td>{{$data->user->name}}</td>
            @foreach($tunjangan as $data1)
             @if($data1->pegawai_id == $data->id)
              <td>{{$data1->tunjangan->besar_uang}}</td>
              @php $a=$data1->tunjangan->besar_uang; ; @endphp
             @endif
            @endforeach
            @foreach($lemburp as $data1)
             @if($data1->pegawai_id == $data->id)
              <td>{{$data1->Jumlah_jam}}</td>
              <td>{{$data1->Jumlah_jam*$data1->kategori->besar_uang}}</td>
              @php $b=$data1->Jumlah_jam*$data1->kategori->besar_uang; @endphp
             @endif
            @endforeach
            <td>{{$data->golongan->besar_uang+$data->jabatan->besar_uang}}</td>
            @php $c=$data->golongan->besar_uang+$data->jabatan->besar_uang; @endphp
            <td>{{$a + $b + $c}}</td>
            <td>
             
              @foreach($tunjangan as $data1 )
             @foreach($penggajian as $data2)
              @if($data2->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id == $data->id )  
               {{$data2->tanggal_pengambilan}}
              @elseif($data2->tunjangan_pegawai_id != $data1->id && $data1->pegawai->id != $data->id )
              
              @elseif($data2->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id != $data->id )
               
              @else
              Belum Diambil
              @endif
              @endforeach
             @endforeach
            </td>
            <td>@foreach($tunjangan as $data1 )
             @foreach($penggajian as $data2)
              @if($data2->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id == $data->id )  
               {{$data2->status_pengambilan}}
              @elseif($data2->tunjangan_pegawai_id != $data1->id && $data1->pegawai->id != $data->id )
              
              @elseif($data2->tunjangan_pegawai_id == $data1->id && $data1->pegawai->id != $data->id )
               
              @else
              Belum diambial
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/penggajian') }}">
                               {{ csrf_field() }}
                                @foreach($tunjangan as $data1)
               @if($data1->pegawai_id == $data->id)
                                  <input type="hidden" name="tunjangan_pegawai_id" value="{{$data1->id}}">
                @php $a=$data1->tunjangan->besar_uang; ; @endphp
               @endif
              @endforeach
                                @foreach($lemburp as $data1)
               @if($data1->pegawai_id == $data->id)
                <input type="hidden" name="jumlah_jam_lembur" value="{{$data1->Jumlah_jam}}">
                <input type="hidden" name="jumlah_uang_lembur" value="{{$data1->Jumlah_jam*$data1->kategori->besar_uang}}">
               @endif
              @endforeach
              <input type="hidden" name="gaji_pokok" value="{{$data->golongan->besar_uang+$data->jabatan->besar_uang}}">
                               <input type="hidden" name="tanggal_pengambilan" value="{{date('Y-m-d')}}" >
                               <input type="hidden" name="status_pengambilan" value="1" >
                              <input type="hidden" name="petugas_penerima" value="lia">
                               <div class="form-group">
                                   <div class="col-md-10 col-md-offset-0">
                                       <button type="submit" class="btn-btn-danger ">
                                           Ambil
                                       </button>
                                   </div>
                               </div>
                           </form>
              @endif
              @endforeach
             @endforeach
             
            </td>
            <td>liaa</td>
           </tr>
           @endforeach
          </tbody>
         </table>
                    </div>
                </div>
            </div>
           </div>
         </div>
        </div>
       </div>
                    </div>
                </div>
@endsection
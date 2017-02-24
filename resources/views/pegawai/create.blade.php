@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">	
			<div class="panel-heading"><h2><b><center>Tambah Data Pegawai</center></b></h2></div>
				<div class="panel-body">
					<form action="{{route('pegawai.store')}}" method="post" enctype= "multipart/form-data">
					{{csrf_field()}}

                    <div class="form-group">
                        <label class="col-md-4 control-label">NIP</label>
                        <div class="col-md-8 form-group">
                            <input type="text" name="nip" class="form-control" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Jabatan</label>
                        <div class="col-md-8 form-group">
                            <select name="jabatan_id" class="form-control" required>
                            <option>Pilih Data Jabatan</option>
                                @foreach($jabatan as $data)
                                <option value="{{$data->id}}">{{$data->nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Golongan</label>
                        <div class="col-md-8 form-group">
                            <select name="golongan_id" class="form-control" required>
                            <option>Pilih Data Golongan</option>
                                @foreach($golongan as $data)
                                <option value="{{$data->id}}">{{$data->nama_golongan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="col-md-4 control-label">Pilih Foto</label>
                        <div class="col-md-8 form-group">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Nama</label>

                        <div class="col-md-8 form-group">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Alamat E-Mail</label>

                        <div class="col-md-8 form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Kata Sandi</label>

                        <div class="col-md-8 form-group">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Konfirmasi Kata Sandi</label>

                        <div class="col-md-8 form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('permission') ? ' has error' : '' }}">
                        <label class="col-md-4 control-label">Permission</label>
                        <div class="col-md-8 form-group">
                            <input class="form-control" id="permission" type="text" name="permission" required>

                            @if ($errors->has('permission'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('permission') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</form>
@endsection
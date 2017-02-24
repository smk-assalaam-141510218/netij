@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
						<div class="panel-heading"><h2><b><center>Tambah Data Pegawai</center></b></h2></div>
				<div class="panel-body">
					<form method="POST" action="{{url('jabatan')}}">
					{{csrf_field()}}

                    <div class="form-group">
                        <label class="col-md-4 control-label">Kode Jabatan</label>
                        <div class="col-md-5 form-group">
                            <input type="text" name="kode_jabatan" class="form-control" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-5 form-group">
                            <input type="text" name="nama_jabatan" class="form-control" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-5 form-group">
                            <input type="text" name="besaran_uang" class="form-control" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Tambah
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
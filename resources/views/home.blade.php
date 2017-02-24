@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><b>Hallo, {{ Auth::user()->name }}</b></div>

                <div class="panel-body">
                    Selamat Datang di Aplikasi Penggajian
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

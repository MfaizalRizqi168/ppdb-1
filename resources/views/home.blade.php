@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <b>Hallo, Selamat datang {{ " ". Auth::user()->name }}.</b>
                    <br>
                   @if(Auth::user()->role == 'siswa')
                        Selamat datang di ppdb smk wikrama bogor
                   @endif
                    @if(Auth::user()->role == 'direktur')
                        Jumlah Siswa : {{ $data }}
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

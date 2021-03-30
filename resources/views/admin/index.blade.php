@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Laporan siswa</h1>
                    <a href="{{ route('direktur.laporan') }}" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-download fa-sm text-white-50"></i> Print Laporan</a>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <tr>
                                <th>No.</th>
                                    <th>Nama Siswa</th>
                                    <th>NIS</th>
                                    <th>Jenis Kelamin</th>
                                    <th>tempat lahir</th>
                                    <th>tanggal lahir</th>
                                    <th>Asal sekolah</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                                @php
                                    $nomor = 1;
                                @endphp
                                @foreach ($data as $r)
                                <tr>
                                <th>{{ $nomor++ }}</th>
                                    <td>{{ $r->user->name }}</td>
                                    <td>{{ $r->nis }}</td>
                                    <td>{{ $r->jk }}</td>
                                    <td>{{ $r->tempat_lahir}}</td>
                                    <td>{{ $r->tanggal_lahir }}</td>
                                    <td>{{ $r->alamat }}</td>
                                    <td>{{ $r->asal_sekolah }}</td>
                                    <td>{{ $r->kelas }}</td>
                                    <td>{{ $r->jurusan}}</td>
                                    <td>{{ $r->telepon }}</td>
                                    <th>{{ $r->created_at->diffForHumans() }}</th>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

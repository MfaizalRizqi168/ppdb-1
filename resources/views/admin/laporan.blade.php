<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Siswa</title>
</head>
<body>
    <center>
        <h1><b>Laporan Siswa</b></h1>
        <table border="1" cellspacing="0" cellpading="5" style="width: 100%;">
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
    </center>
</body>
</html>

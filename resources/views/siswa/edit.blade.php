@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{ route('siswa.update', $data->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                 <label for="nama">Nama Siswa :</label>
                                 <input type="text" id="nama" value="{{ Auth::user()->name }}" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                 <label for="nis">NIS :</label>
                                 <input type="text" value="{{ $data->nis }}" name="nis" id="nis" class="form-control" required>
                            </div>
                            @error('nis')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="jeka">Jenis Kelamin :</label>
                                 <select name="jk" id="jeka" class="form-control">
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                 </select>
                            </div>
                            @error('jk')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="tempat_lahir">tempat lahir :</label>
                                 <input type="text" value="{{ $data->tempat_lahir }}" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                            </div>
                            @error('tempat_lahir')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="tanggal_lahir">tanggal lahir :</label>
                                 <input type="date" value="{{ $data->tanggal_lahir}}" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                            </div>
                            @error('tanggal_lahir')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="alamat">alamat :</label>
                                 <input type="text" value="{{ $data->alamat }}" name="alamat" id="alamat" class="form-control " required>
                            </div>
                            @error('alamat')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="asal_sekolah"> Asal Sekolah:</label>
                                 <input type="text" value="{{ $data->asal_sekolah}}" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
                            </div>
                            @error('asal_sekolah')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="kelas">Kelas :</label>
                                 <select name="kelas" value="{{ $data->asal_sekolah}}"id="kelas" class="form-control" reuired>
                                     <option disabled selected>Pilih Kelas Anda</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                 </select>
                            </div>
                            @error('kelas')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="jurusan">Jurusan :</label>
                                 <select name="jurusan" value="{{ $data->jurusan}}" id="jurusan" class="form-control" reuired>
                                     <option disabled selected>Pilih Jurusan Anda</option>
                                    <option value="rpl">RPL</option>
                                    <option value="tkj">TKJ</option>
                                    <option value="mmd">MMD</option>
                                    <option value="bdp">BDP</option>
                                    <option value="htl">HTL</option>
                                    <option value="tbg">TBG</option>
                                    <option value="otkp">OTKP</option>
                                 </select>
                            </div>
                            @error('jurusan')
                                {{ $message }}
                            @enderror
                            <div class="form-group">
                                 <label for="telepon">Nomor Telepon :</label>
                                 <input type="text" value="{{ $data->telepon }}" name="telepon" id="telepone" class="form-control" required>
                            </div>
                            @error('telepon')
                                {{ $message }}
                            @enderror
                            <a href="{{ route('siswa.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

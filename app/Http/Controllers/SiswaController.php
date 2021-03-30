<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index', [
            'data' => Siswa::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Siswa;
        $data->user_id = auth()->user()->id;
        $data->nis = $request->nis;
        $data->jk = $request->jk;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->asal_sekolah = $request->asal_sekolah;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->telepon = $request->telepon;
        $data->save();
        return redirect()->route('siswa.index')->with('sukses', 'Data berhasil disimpan!');
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
        $data = Siswa::findOrFail($id);
        return view('siswa.edit', compact('data'));
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
        $data = Siswa::findOrFail($id);
        $data->user_id = auth()->user()->id;
        $data->nis = $request->nis;
        $data->jk = $request->jk;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->asal_sekolah = $request->asal_sekolah;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->telepon = $request->telepon;
        $data->save();
        return redirect()->route('siswa.index')->with('sukses', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa ::findOrFail($id);
        $data->delete();
        return back()->with('sukses', 'Data berhasil dihapus!');
    }
}

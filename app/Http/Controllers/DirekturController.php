<?php

namespace App\Http\Controllers;

use App\Siswa;
use PDF;

class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('direktur.index', [
            'data' => Siswa::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak_laporan()
    {
        $siswa = Siswa::get();
    	$pdf = PDF::loadview('direktur.laporan', ['data' => $siswa]);
    	return $pdf->download('laporan-siswa-pdf');
    }
}

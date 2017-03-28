<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class SeminarTugasAkhirController extends Controller
{
    public function index($bulan, $tahun) {
        $title = 'Seminar Tugas Akhir Bulan '.$bulan.' '.$tahun;
        $hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        $nama_bulan =  Carbon::createFromFormat('!m', $bulan)->format("F");
        return view('seminar.index', compact('title','hari','nama_bulan'));
    }
}

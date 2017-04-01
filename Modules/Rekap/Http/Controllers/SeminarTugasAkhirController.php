<?php

namespace Modules\Rekap\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jenssegers\Date\Date;

class SeminarTugasAkhirController extends Controller
{
    public function index($nama_bulan, $tahun) {
        $title = 'Seminar Tugas Akhir Bulan '.ucfirst($nama_bulan).' '.$tahun;
        $hari = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
        return view('seminar.index', compact('title','hari','nama_bulan'));
    }
}

@extends('adminlte::layouts.app')

@section('htmlheader')
@parent
<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.min.css') }}">
@endsection 

@section('contentheader_title', $title)

@section('main-content')

<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-primary">
                <div class="panel-heading">Input Data Seminar Tugas Akhir</div>
                <div class="panel-body">
                    <form id="form-seminar">
                        <div class="form-group">
                            <label for="nim">NIM:</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul:</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="moderator">Moderator:</label>
                            <input type="text" class="form-control" id="moderator" name="moderator">
                        </div>
                        <div class="form-group">
                            <label for="moderator">Penguji:</label>
                            <input type="text" class="form-control" id="moderator" name="moderator">
                        </div>
                        <div class="form-group">
                            <label for="pembimbing1">Pembimbing 1:</label>
                            <input type="text" class="form-control" id="pembimbing1" name="pembimbing1">
                        </div>
                        <div class="form-group">
                            <label for="pembimbing2">Pembimbing 2:</label>
                            <input type="text" class="form-control" id="pembimbing2" name="pembimbing2">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">Input Jadwal Seminar Tugas Akhir</div>
                <div class="panel-body">
                    <div class="form-group">
                    <label for="hari">Hari:</label>
                    <select class="form-control" id="hari">
                    @foreach($hari as $hari)
                        <option>{{$hari}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="hari">Tanggal:</label>
                    <select class="form-control" id="hari">
                    @for($i = 1; $i <=31 ; $i++)
                        <option>{{ $i.' '.ucfirst($nama_bulan) }}</option>
                    @endfor
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="jam_mulai">Jam Mulai:</label>
                        <input type="text" class="form-control timepicker" id="jam_mulai" name="jam_mulai">
                    </div>
                    <div class="form-group">
                        <label for="jam_selesai">Jam Selesai:</label>
                        <input type="text" class="form-control timepicker" id="jam_selesai" name="jam_selesai">
                    </div>
                    <div class="form-group">
                    <label for="hari">Hari:</label>
                    <select class="form-control" id="hari">
                        <option>Ruang Rapat Prodi</option>
                        <option>Ruang Lain</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <button type="submit" id="submit" class="btn btn-lg btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    @section('scripts') 
    @parent
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script>
        $('.timepicker').timepicker({
        timeFormat: 'H:mm',
        interval: 30,
        minTime: '8:00am',
        maxTime: '6:00pm',
        defaultTime: '8',
        startTime: '8',
        dynamic: false,
        dropdown: true,
        scrollbar: true
        });
    </script>
    <script>
        $(function () {
            $("#submit").click(function () {
                $("#form-seminar").submit();
            });
        });
    </script>
    @endsection @endsection
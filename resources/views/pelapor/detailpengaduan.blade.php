@php
    $hideFooter = true; // Atur ini untuk menyembunyikan footer
@endphp
@extends('layouts.main')
@section('container')
<style>
    body {
        background-color: #F5F5F5;
        margin: 0;
        padding: 0;
    }
</style>
<div class="card">
    <div class="card" style="position: relative; margin-top: -25px;">
        <img src="{{ asset('img/kualanamu8.jpg') }}" class="card-img-top" alt="#" style="height: 260px; width: 100%; filter: brightness(0.6); background:rgba(0, 0, 0, 0.5);">
        <h2 class="position-absolute p-" style="color: white; top: 24%; left: 10%; transform: translate(-30%, -30%);">
            <b>Detail Pengaduan</b>
            {{-- <p>{{ $pengaduans->judul }}</p> --}}
        </h2>
    </div>
</div><br>
    <div>
        <div class="position-absolute" style="padding-top: 5px;padding-left:30px;">
            <h6><b>Status Pengaduan : </b></h6>
        </div>
        <div style="display:flex; justify-content: flex-end;padding-right:4%">
            <a href="/pelapor/ajukanpengaduan"><button type="button" class="btn btn-danger px-3" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.7);color: rgb(255, 255, 255); background-color: #FF2E00;" onclick="ajukanPengaduan()">Ajukan Pengaduan</button></a>
        </div>
    </div>
</div><br>
    <div class="row" style="padding-left:5%; padding-top: 1%;">
        <div class="col-md-6 py-3" style="padding-left:20px; font-size:14px;background-color: white;margin-top:-15px;"> 
            <div class="table-responsive">
                <h6><b>Data Pengaduan</b></h6>
                <table class="table table-striped table-md" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>Nomor Surat</th>
                            <td>WBS/AVI/{{ $pengaduans->created_at->format('Ymd') }}/{{ $pengaduans->id }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Terlapor</th>
                            <td>{{ $pengaduans->jenis_terlapor }}</td>
                        </tr>
                        <tr>
                            <th>Lingkup</th>
                            <td>{{ $pengaduans->lingkup }}</td>
                        </tr>
                        <tr>
                            <th>Judul</th>
                            <td>{{ $pengaduans->judul }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Kejadian</th>
                            <td>{{ $pengaduans->tanggal_kejadian }}</td>
                        </tr>
                        <tr>
                            <th>Keterangan/Narasi/Uraian Kejadian</th>
                            <td>{{ $pengaduans->keterangan }}</td>
                        </tr>
                    </thead>
                </table>
                <h6 style="color: #FF2E00"><b>Identitas Terlapor</b></h6>
                <table class="table table-striped table-md" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="width: 40%">Nama</th>
                            <td>{{ $pengaduans->nama_terlapor }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>{{ $pengaduans->jabatan_terlapor }}</td>
                        </tr>
                        <tr>
                            <th>Instansi/Lembaga/Perusahaan</th>
                            <td>{{ $pengaduans->instansi_terlapor }}</td>
                        </tr>
                    </thead>
                </table>
                <h6 style="color: #FF2E00"><b>Identitas Pelapor</b></h6>
                <table class="table table-striped table-md" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="width: 40%">Nama</th>
                            <td>{{ $pengaduans->nama_pelapor }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Identitas</th>
                            <td>{{ $pengaduans->nomor_identitas }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Handphone</th>
                            <td>{{ $pengaduans->nomor_hp }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $pengaduans->email }}</td>
                        </tr>
                        <tr>
                            <th>Instansi/Lembaga/Perusahaan</th>
                            <td>{{ $pengaduans->instansi_pelapor }}</td>
                        </tr>
                    </thead>
                </table>
                <h6 style="color: #FF2E00"><b>Lampiran Bukti Pengaduan</b></h6>
                <table class="table table-striped table-md" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>Judul File</th>
                            <td>{{ $pengaduans->judul_file }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="col-md-6 py-3" style="padding-left:20px; font-size:14px;background-color: white;margin-top:-15px;">
            <div class="table-responsive">
                <h6><b>Ditindaklanjuti Oleh</b></h6>
                <table class="table table-striped table-md" style="width: 96%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="width: 20%">No</th>
                            <th style="width: 50%">Nama</th>
                            <th>Email</th>
                        </tr>
                        <tr>
                            <td>Ini nomor</td>
                            <td>Ini Nama</td>
                            <td>Ini Email</td>
                        </tr>
                    </thead>
                </table>
                <h6><b>Status Pengaduan</b></h6>
                <table class="table table-striped table-md" style="width: 96%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="width: 20%">No</th>
                            <th style="width: 50%">Status</th>
                            <th>Tanggal</th>
                        </tr>
                        <tr>
                            <td>Ini nomor</td>
                            <td>Ini status</td>
                            <td>Ini tanggal</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection

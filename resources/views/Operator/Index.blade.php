@extends('layout/operator')
@section('title', 'Halaman Pengisian Pengunjung')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">
            <h3 class="mt-3">Silahkan Isi Form Kunjungan</h3>
            <hr>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            
            <form action="{{route('kunjungan')}}" method="POST">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="form mt-4">
            <div class="form-group row">
                <label for="inputOPD" name="opd" class="col-sm-2 col-form-label">OPD</label>
                <div class="col-sm-10">
                <select class="form-control" name="opd" id="opd" data-dependent="pegawai">
                <option selected>Silahkan Pilih OPD dari Pejabat/Staf yang Ingin Anda Kunjungi</option>
                @foreach ($opds as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTujuan" name="pegawai" class="col-sm-2 col-form-label">Tujuan</label>
                <div class="col-sm-10">
                <select class="form-control" name="pegawai" id="pegawai">
                <option selected>Silahkan Pilih Pejabat/Staf yang Ingin Anda Kunjungi </option>
                <option value="">Select pegawai</option>
                </select>
                </div>
            </div>
            {{csrf_field()}}
            <div class="form-group row">
                <label for="inputNIP" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                <input type="NIP" name="NIP" class="form-control" id="inputNIP" placeholder="NIP">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="nama" name="nama" class="form-control" id="inputnama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                <input type="Jabatan" name="jabatan" class="form-control" id="inputjabatan" placeholder="jabatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputasalinstansi" class="col-sm-2 col-form-label">Asal Instansi</label>
                <div class="col-sm-10">
                <input type="asalinstansi" name="asalinstansi" class="form-control" id="inputasalinstansi" placeholder="Asal Instansi">
                </div>
            </div>
            <div class="form-group row">
                <label for="maksudberkunjung" name="maksudberkunjung" class="col-sm-2 col-form-label">Maksud Berkunjung</label>
                <div class="col-sm-10">
                <select class="form-control mt-2" name="maksudberkunjung">
                @foreach ($maksudberkunjungs as $maksudberkunjung)
                    <option value="{{ $maksudberkunjung->value}}">{{$maksudberkunjung->value}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputlainnya" class="col-sm-2 col-form-label">Lainnya</label>
                <div class="col-sm-10">
                <input type="lainnya" name="lainnya" class="form-control" id="inputlainnya" placeholder="lainnya">
                </div>
            </div>
        
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
            
            <div class="form-group row">
            <label for="showidkunjungan" class="col-sm-2 col-form-label">ID Kunjungan</label>
            <div class="col-sm-1">
            <input class="form-control" type="text" placeholder="" readonly>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>  

@endsection     

  
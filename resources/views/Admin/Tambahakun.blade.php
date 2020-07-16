@extends('layout/Admin')
@section('title', 'Halaman Pengisian Pengunjung')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">
            <h3 class="mt-3">Silahkan Isi Form Anggota</h3>
            <hr>
            <form action="{{route('Tambahakun')}}" method="POST">
            {{csrf_field()}}
            <!-- <div class="form mt-4">
            <div class="form-group row">
                <label for="inputOPD" class="col-sm-2 col-form-label">Tambah Sebagai</label>
                <div class="col-sm-10">
                <select class="form-control">
                <option Selected>Pilih Jenis Akun</option>
                <option value="1">Pejabat/Staf</option>
                <option value="2">Operator</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTujuan" class="col-sm-2 col-form-label">OPD</label>
                <div class="col-sm-10">
                <select class="form-control">
                <option selected>Silahkan Pilih OPD</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
                </div>
            </div> -->
            <div class="form-group row">
                <label for="inputNIP" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                <input type="NIP" name="NIP" class="form-control {{ $errors->has('NIP') ? 'is-invalid':''}}" id="NIP" value="{{old('NIP')}}" placeholder="NIP" required>
                @if (
                    $errors->has('NIP'))
                    <div class="invalid-feedback">
                    {{$errors->first('NIP')}}
                </div>
                @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="nama" name="nama" class="form-control {{ $errors->has('nama') ? 'is-invalid':''}}" id="nama" value="{{old('nama')}}" placeholder="Nama" required>
                @if (
                    $errors->has('nama'))
                    <div class="invalid-feedback">
                    {{$errors->first('nama')}}
                </div>
                @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="Username" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid':''}}" value="{{old('username')}}" id="username" placeholder="Username" required>
                @if (
                    $errors->has('username'))
                    <div class="invalid-feedback">
                    {{$errors->first('username')}}
                </div>
                @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="inputjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                <input type="Jabatan" name="jabatan" class="form-control {{ $errors->has('jabatan') ? 'is-invalid':''}}" value="{{old('jabatan')}}" id="jabatan" placeholder="jabatan" required>
                @if (
                    $errors->has('jabatan'))
                    <div class="invalid-feedback">
                    {{$errors->first('jabatan')}}
                </div>
                @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid':''}}" id="email" value="{{old('email')}}" placeholder="Email" required>
                @if (
                    $errors->has('email'))
                    <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
                @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="inputkatasandi" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':''}}" id="password" placeholder="Kata Sandi">
                @if (
                    $errors->has('password'))
                    <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
                @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="inputconfirmasikatasandi" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                <input type="confirmasikatasandi" name="password_confirmation" class="form-control  {{ $errors->has('password_confirmation') ? 'is-invalid':''}}" id="inputconfirmasikatasandi" placeholder="Konfirmasi Kata Sandi">
                @if (
                    $errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                    {{$errors->first('password_confirmation')}}
                </div>
                @endif
                </div>
            </div>
            <!-- <div class="form-group row">
                 <label for="inputgambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-4 ml-3">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                </div>
            </div> -->
            <div class="form-group row  rounded float-right">
                <div class="col-sm-10 mt-5">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
           </form>
           
        </div>
        </div>
    </div>
</div>   
@endsection     

  
@extends('layout/Pegawai')
@section('title', 'Tamu Anda')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">

            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Daftar Riwayat Tamu</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Daftar Request Tamu</a>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">
                <div class="btn-group">
                <div class="dropdown">
                <text class="dropdown-toggle" type="text" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Maksud Berkunjung
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">a</a>
                    <a class="dropdown-item" href="#">b</a>
                    <a class="dropdown-item" href="#">c</a>
                </div>
                </div></th>
                <th scope="col"> <div class="btn-group">
                <div class="dropdown">
                <text class="dropdown-toggle" type="text" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">a</a>
                    <a class="dropdown-item" href="#">b</a>
                    <a class="dropdown-item" href="#">c</a>
                </div>
                </div></th>
                <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>17 08 2020</td>
                <td>32A</td>
                <td>Efren Pradita Benedictus Manalu</td>
                <td >Berkordinasi</td>
                <td>Ditolak</td>
                <td>Pejabat Sedang Pergi</td>
                </tr>
               
            </tbody>
            </table></div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card col-sm-16  mt-3" style="width: 65rem;">
            <div class="row">
            <div class="container" style="min-height:380px;"> 
            <div class="row">
            <div class="col-sm-5">
            <div class="card-body">
            <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label"><b>ID</b></label>
                <div class="col-sm-4">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="320A">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticNIP" class="col-sm-3 col-form-label"><b>NIP</b></label>
                <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticNIP" value="11S170501123456789">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticNama" class="col-sm-3 col-form-label"><b>Nama</b></label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="staticNama" value="Efren Manalu">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticJabatan" class="col-sm-3 col-form-label"><b>Jabatan</b></label>
                <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticJabatan" value="Mahasiswa IT Del">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticasalinstansi" class="col-sm-3 col-form-label"><b>Instansi</b></label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="staticasalinstansi" value="Institut Teknologi Del">
                </div>
            </div>
            </form>
            </div>

            </div>
            <div class="col-sm-7">
            <div class="card-body">
            <form>
            <div class="form-group row">
                <label for="statictujuan" class="col-sm-4 col-form-label"><b>Tujuan</b></label>
                <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Rianti Zega">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticmaksudberkunjung" class="col-sm-4 col-form-label"><b>Maksud Berkunjung</b></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Berkoordinasi">
                </div>
            </div>
            <fieldset disabled>
                <div class="form-group">
                <label for="disabledTextInput"><b>Keterangan</b></label>
                <input type="textArea" row="3" id="disabledTextInput" class="form-control col-sm-11" value="Pembuatan Aplikasi Bank Sampah"placeholder="">
                </div>
            </fieldset>
            <div class="container mt-2 mr-5">
                    <button type="submit" class=" btn btn-success btn-sm mr-4">Terima</button>
                    <button type="submit" class=" btn btn-warning btn-sm mr-4">Tunggu</button>
                    <button type="submit" class=" btn btn-danger btn-sm">Tolak</button>
            </div>
            </form>
            </div>

            </div>
             
                </div>
                </div>
        </div>
        </div>
    </div>
</div>   
@endsection     

  
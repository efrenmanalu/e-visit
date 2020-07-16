@extends('layout/operator')
@section('title', 'Daftar Riwayat Kunjungan')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">
            <h3 class="mt-3">Daftar Riwayat Kunjungan</h3>
            <hr>
            <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Tujuan</th>
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
                <th scope="row">17 Agustus 2020</th>
                <td>32A</td>
                <td>Efren Manalu</td>
                <td>Rianty Zega</td>
                <td>Berkordinasi</td>
                <td>Ditolak</td>
                <td>Pejabat Sedang Pergi</td>
                </tr>
               
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>   
@endsection     

  
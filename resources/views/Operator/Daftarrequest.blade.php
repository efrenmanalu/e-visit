@extends('layout/operator')
@section('title', 'Daftar Request Pengunjung')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">
            <h3 class="mt-3">Daftar Request Pengunjung</h3>
            <hr>
            <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Instansi</th>
                <th scope="col">Maksud Berkunjung</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">32A</th>
                <td>Efren Manalu</td>
                <td>IT Del</td>
                <td>Berkordinasi</td>
                <td><a href="/Operator/Daftarrequest/Detailrequest" class="badge badge-success">Detail</a></td>
                </tr>
               
    </tr>
  </tbody>
</table>

        </div>
    </div>
</div>   
@endsection     

  
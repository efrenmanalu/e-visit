@extends('layout/Admin')
@section('title', 'List Daftar Operator')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">
        <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" type="width=300px">List Pejabat/Staf</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">List Operator</a>
            </li>
            
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="mt-3">List Pejabat/Staf</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                    1.Efren Manalu
                    <div class="btn-aksi">
                    <a class="btn btn-primary btn-sm right-block font-weight-light" href="/Kelolaakun/edit">Edit</a>
                    <span class="btn btn-danger btn-sm">Delete</span>
                    </div>
                </li>
                </ul></div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><h3 class="mt-3">List Operator</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                    1.Efren Manalu
                    <div class="btn-aksi">
                    <a class="btn btn-primary btn-sm right-block font-weight-light" href="/Kelolaakun/edit">Edit</a>
                    <a class="btn btn-danger btn-sm font-weight-light">Delete</a>
                    </div>
                </li>
                </ul></div>
            </div>
        </div>
        </div>
    </div>
</div>   
@endsection     

  
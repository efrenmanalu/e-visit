@extends('layout/operator')
@section('title', 'Profil')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
        <div class="col-mt-10">
            <h2 class="mt-3">Profil</h2>
            <hr>
            <div class="container" style="min-height:570px;"> 
            <div class="row">
            <div class="col-sm-9">
                <form action="" method="">
                    <div class="form-group row">
                    <label for="showNIP" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-7">
                    <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="shownama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-7">
                    <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="showjabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-7">
                    <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="showOPD" class="col-sm-2 col-form-label">OPD</label>
                    <div class="col-sm-7">
                    <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="showEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-7">
                    <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="showkatasandi" class="col-sm-2 col-form-label">Kata Sandi</label>
                    <div class="col-sm-7">
                    <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                </div>
                      
                    
                </form>
            </div>
            <div class="col-sm-3">
                <form class="md-form ">
                    <div class="file-field">
                        <div class="d-flex justify-content-center mb-4 ">
                        <img src=""
                            class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                        </div>
                        <div class="d-flex justify-content-center  mb-4 pl-5">
                            
                                <input type="file">

                        </div>
                        <div class="mt-5">
                            <button type="submit" class=" btn btn-success">Simpan</button>
                            <button type="submit" class=" btn btn-success">Keluar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>   
@endsection     

  
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\admin;
use App\operator;
use App\pegawai;
use Illuminate\Http\Request;

class login extends Controller
{
    function masuk(Request $kiriman){
    $data1=admin::where('username',$kiriman->username)->where('password',$kiriman->
        password)->get();
    $data2=operator::where('username',$kiriman->username)->where('password',$kiriman->
        password)->get();
    $data3=pegawai::where('username',$kiriman->username)->where('password',$kiriman->
        password)->get();
    if (count($data1)>0){
   //login berhasil admin
   Auth::guard('admin')->loginUsingId($data1[0]['id']);
        return redirect('/Admin');     
    }else if(count($data2)>0){
    //login berhasil operator
    Auth::guard('operator')->loginUsingId($data2[0]['id']);
        return redirect('/Operator');
    }else if(count($data3)>0){
    Auth::guard('pegawai')->loginUsingId($data3[0]['id']);
        return redirect('/Pegawai');
    }else{
        //gagal login
        return redirect ('/Login');
    }


    }
    function keluar(){
        if(Auth::guard('admin')->check()){
        Auth::guard('admin')->logout();
        }else if(Auth::guard('operator')->check()){
        Auth::guard('operator')->logout();
        }else if(Auth::guard('pegawai')->check()){
        Auth::guard('pegawai')->logout();
        }
        
       return redirect ('/Login');
        
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\operator;
use App\OPD;

class TambahakunController extends Controller
{
    public function getTambahakun()
    {
        return view('Admin.Tambahakun');
    }

    
    public function PostTambahakun(Request $request)
    {
        $this->validate($request, [
            'NIP' =>'required|min:17',
            'nama' => 'required|min:5',
            'username' => 'required|min:5',
            'jabatan' => 'required',
            'email' =>'required|email|unique:operator',
            'password' => 'required|min:|confirmed',
        ]);

        operator::create([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'username'=>$request->username,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

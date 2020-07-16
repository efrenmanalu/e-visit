<?php

namespace App\Http\Controllers;
use App\kunjungan;
use App\pejabat;
use App\opd;
use App\maksudberkunjung;
use Illuminate\Http\Request;
use DB;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $maksudberkunjungs = maksudberkunjung::all();
        $opds = DB::table('opd')->pluck("namaopd","id");
        return view('/Operator/Index',compact('maksudberkunjungs'));  
    }
    
    // public function getopd()
    // {
    //     $maksudberkunjungs = maksudberkunjung::all();
    //     $opds = DB::table('opd')->pluck("namaopd","id");
    //     return view('/Operator/Index',compact('maksudberkunjungs')); 
    // }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //

    public function store(Request $request)
    {
        
        function RandomString($length) {
            $keys = array_merge(range(0,9), range('A', 'Z'));

            $key = "";
            for($i=0; $i < $length; $i++) {
                $key .= $keys[mt_rand(0, count($keys) - 1)];
            }
            return $key;
        }

        kunjungan::create([
            'id_kunjungan' => RandomString(3),
            'opd' => $request->opd,
            'tujuan' => $request->tujuan,
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'jabatan'=>$request->jabatan,
            'asal instansi'=>$request->asalinstansi,
            'maksud berkunjung'=>$request->maksudberkunjung,
            'lainnya'=>$request->lainnya,
        ]);

       return redirect()->back();
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

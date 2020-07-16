<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kunjungan extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kunjungan','opd','tujuan','NIP','nama','jabatan','asal instansi', 'maksud berkunjung','lainnya',
    ];

    public $timestamps = false;
    protected $table='kunjungan';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operator extends Model
{   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIP','nama','username','jabatan','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token','create_at','update_at',
    ];
    public $timestamps = false;
    protected $table='operator';
}


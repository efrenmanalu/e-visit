<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login_admin extends Authenticatable
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

   protected $table='admin';
}

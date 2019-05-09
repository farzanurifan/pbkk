<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $fillable = [
	 'nama_barang','harga_awal','path','user_id','special_token'
  ];

	public function TipeBarang(){
    	return $this->hasMany('App\TipeBarang');
   	}

   	public function Lelang(){
   		return $this->hasOne('App\Lelang');
   	}

    public function User()
    {
      return $this->belongsTo('App\User');
    }
}

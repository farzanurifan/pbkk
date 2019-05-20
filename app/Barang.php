<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $fillable = [
	 'nama_barang','harga_awal','path','keterangan_barang','user_id','special_token','tipebarang_id'
  ];

	public function TipeBarang(){
    	return $this->belongsTo('App\TipeBarang','tipebarang_id','id');
   	}

   	public function Lelang(){
   		return $this->hasOne('App\Lelang');
   	}

    public function User()
    {
      return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

  class TipeBarang extends Model
{
	protected $fillable = [
		'tipe_barang'
	];

	public function Barang(){
    	return $this->hasMany('App\Barang');
   	}
}

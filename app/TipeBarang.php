<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

  class TipeBarang extends Model
{
	protected $fillable = [
		'barang_id','tipe_barang'
	];

	public function Barang(){
    	return $this->belongsTo('App\Barang');
   	}
}

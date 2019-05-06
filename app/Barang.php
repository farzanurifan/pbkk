<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = false;

	protected $fillable = [
	'nama_barang','harga_awal'
];

	public function TipeBarang(){
    	return $this->hasMany('App\TipeBarang','id','id');
   	}

   	public fuction Lelang(){
   		return $this->belongsTo('App\Lelang','id','id')
   	}
}

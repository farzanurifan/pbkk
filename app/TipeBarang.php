<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

  class TipeBarang extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = false;

	protected $fillable = [
	'tipe_barang'
];

	public function Barang(){
    	return $this->belongsTo('App\Barang','id','id');
   	}
}

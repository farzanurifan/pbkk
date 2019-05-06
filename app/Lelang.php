<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = false;

	protected $fillable = [
	'harga','status','durasi'
];

	public fuction Barang(){
   		return $this->hasMany('App\Lelang','id','id')
   	}

   	public function User(){
   		return $this->belongsTo('App\User','id','id')
   	}

}

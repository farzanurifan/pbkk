<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
	protected $fillable = [
	'harga','status','durasi','barang_id','user_id','penawar_id','min_bid'
];

	public function Barang(){
   		return $this->belongsTo('App\Barang');
   	}

   	public function User(){
   		return $this->belongsTo('App\User');
   	}

}

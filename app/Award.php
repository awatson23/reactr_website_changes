<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Award extends Model
{
    protected $table = 'tbl_awards';



public function project() {
	return $this->belongsTo('App\Projects');
}



}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Testimonials extends Model
{
    protected $table = 'tbl_testimonials';
    protected $primaryKey = 'testimonial_id';
    public $timestamps = false;

    //the function that gets called to go and access info from team table
    public function teams() //one person for each testimony
    {
      return $this->belongsTo('App\Teams', 'st_team_id');
    }

}

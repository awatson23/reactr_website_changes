<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'tbl_tech';
    protected $primaryKey = 'tech_id';
    public $timestamps = false;

    public function Projects() //many to many relationship (many technologies for many different projects)
    {
      return $this->belongsToMany('App\Projects', 'tbl_proj_tech', 'tech_id', 'project_id');
    }

}

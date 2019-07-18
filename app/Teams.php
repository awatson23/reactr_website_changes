<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'tbl_st_team';
    protected $primaryKey = 'st_team_id';
    public $timestamps = false;

    public function Projects() //many to many relationship (many team members for many different projects)
    {
      return $this->belongsToMany('App\Projects', 'tbl_proj_st', 'st_team_id', 'project_id');
    }

}

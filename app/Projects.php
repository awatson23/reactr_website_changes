<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Projects extends Model
{
    protected $table = 'tbl_project';
    protected $primaryKey = 'project_id';
    public $timestamps = false;

    protected $guarded = [];


    public function features() //one to many relationship (one project for many features)
    {
      return $this->hasMany('App\Features', 'project_id');
    }

    public function gallery() //one to many relationship (one project for many gallery images)
    {
      return $this->hasMany('App\Gallery', 'project_id');
    }

    public function teamMembers() //many to many relationship (many team members for many different projects)
    {
      return $this->belongsToMany('App\Teams', 'tbl_proj_st', 'project_id', 'st_team_id')
                  ->as('teamMembers'); //names the pivot
    }

    public function tech() //many to many relationship (many technologies to many different projcts)
    {
      return $this->belongsToMany('App\Tech', 'tbl_proj_tech', 'project_id', 'tech_id')
                  ->as('tech'); //names the pivot
    }


    public function awards() {
      return $this->hasMany('App\Award', 'award_project');
    }

}

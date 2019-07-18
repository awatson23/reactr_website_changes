<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Features extends Model
{
    protected $table = 'tbl_features';
    protected $primaryKey = 'feature_id';
    protected $guarded = []; //allows mass saving and creating
    public $timestamps = false;
}

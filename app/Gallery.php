<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Gallery extends Model
{
    protected $table = 'tbl_gallery';
    protected $primaryKey = 'gallery_id';
    protected $guarded = []; //allows mass saving and creating
    public $timestamps = false;
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    //
    use SoftDeletes;
    
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $dates = ['delete_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends \TCG\Voyager\Models\Category
{
    use SoftDeletes;

    protected $tables='categories';
    protected $dates = ['deleted_at'];
    protected $fillable=['parent_id','order','name','slug','status','image'];

}

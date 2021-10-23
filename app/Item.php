<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $tables='items';
    protected $dates = ['deleted_at'];
    protected $fillable=['category_id','name','status','image','price','offer_price'];
}

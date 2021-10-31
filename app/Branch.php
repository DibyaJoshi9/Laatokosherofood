<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    protected $table='branches';
    protected $fillable=['name','contact_number','status','mobile_number','address','description'];
}

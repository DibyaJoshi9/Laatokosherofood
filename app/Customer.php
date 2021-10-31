<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $table='customers';
    protected $fillable=['first_name','last_name','phone_number','password','gender','secondary_phone_number','email','status'];
}

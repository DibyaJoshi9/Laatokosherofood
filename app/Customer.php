<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    protected $table='customers';
    protected $fillable=['first_name','last_name','phone_number','gender','secondary_phone_number','email','status','facebook_id','google_id'];

    protected $hidden = [
        'password',
    ];

    public function getSocialAttribute($value)
    {
        return json_decode($value);
    }
}

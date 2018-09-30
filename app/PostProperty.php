<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostProperty extends Model
{
    //
    protected $fillable = [
        'house_number', 'post_code', 'property_type','beds_no','bathrooms_no', 'price', 'commission', 'description', 'image'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

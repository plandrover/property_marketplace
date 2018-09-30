<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //


    public $timestamps = false;

    protected $fillable =[

        'user_id',
        'title',
        'content',
        'post_code',
        'house_number',
        'property_type',
        'beds_no',
        'bathrooms_no',
        'price',
        'commission',
        'description'
    ];

    public function user() {

    return $this->belongsTo('App\User');

    }
}

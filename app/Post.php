<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;




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
        'description',
        'image_pathway',

    ];

    public function user() {

    return $this->belongsTo('App\User');

    }
    public function userCanEdit(User $user)
    {
        return $user->isAdmin() || $this->user_id == $user->id;
    }

    public function favourited()
    {
        return (int) Favourite::where('user_id', Auth::id())
            ->where('post_id', $this->id)
            ->count();
    }
}

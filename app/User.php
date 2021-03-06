<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','dob'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {

        return $this->hasMany('App\Post');
    }
    public function favourites()
    {
        return $this->belongsToMany(Post::class, 'favourites', 'user_id', 'post_id')->withTimeStamps();
    }

//    public function hasFavourited($post)
//    {
//        return $this->favourites->filter(function ($favourite) use ($post) {
//            return $favourite->post_id == $post->id;
//        })->count() != 0;
//    }

}
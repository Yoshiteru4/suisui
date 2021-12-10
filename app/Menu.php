<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = ['food','price','user_id'];
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
    public function favoprites()
    {
        return $this->hasMany(Favorite::class, 'menu_id');
    }
}

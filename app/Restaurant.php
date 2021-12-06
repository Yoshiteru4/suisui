<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = ['name','address','lunchhour'];

    public function menus()
    {
        return $this->hasmany('App\Menu');
    }
}

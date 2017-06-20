<?php

namespace AppSportswear;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menus';

    protected $fillable = ['name'];
    public function submenus(){
        return $this->hasMany('AppSportswear\Submenu');
    }
}

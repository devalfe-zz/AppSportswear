<?php

namespace AppSportswear;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    //
    protected $table = 'submenus';

    protected $fillable = ['name','menu_id'];
    public function menu(){
        return $this->belongsTo('AppSportswear\Menu');
    }
}

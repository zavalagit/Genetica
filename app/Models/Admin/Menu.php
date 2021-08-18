<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";
    protected $fillable = ['titulo', 'url', 'icono'];
}

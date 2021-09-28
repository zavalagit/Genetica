<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = "permisos";
    protected $fillable = ['nombre', 'slug'];
    protected $guarded = ['id'];
}

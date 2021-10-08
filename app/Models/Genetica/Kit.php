<?php

namespace App\Models\Genetica;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    protected $table = "kits";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}

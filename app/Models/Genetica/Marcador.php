<?php

namespace App\Models\Genetica;

use Illuminate\Database\Eloquent\Model;

class Marcador extends Model
{
    protected $table = "marcadores";
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}

<?php

namespace App\Models\Genetica;

use Illuminate\Database\Eloquent\Model;

class Str extends Model
{
    protected $table = "strs";
    protected $fillable = ['folio'];


    public function valores()
    {
        return $this->hasMany(Secuenciavalor::class,'str_id');
    }
}

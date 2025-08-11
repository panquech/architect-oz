<?php

namespace App\Models\Sepomex;

use Illuminate\Database\Eloquent\Model;

class SepomexMunicipio extends Model
{
    protected $table = "sepomex_municipios";

    public function estado()
    {   
        return $this->belongsTo(SepomexEstado::class, 'c_estado', "c_estado");
    }
}

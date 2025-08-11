<?php

namespace App\Models\Sepomex;

use Illuminate\Database\Eloquent\Model;
use App\Models\SepomexMunicipio;

class SepomexEstado extends Model
{
    protected $table = "sepomex_estados";

    protected $primarykey = "c_estado";

    public function municipios()
    {
        return $this->hasMany(SepomexMunicipio::class, "c_estado");
    }
}

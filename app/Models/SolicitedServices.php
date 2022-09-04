<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitedServices extends Model
{
    use HasFactory;

    //Tabla
    protected $table = "solicited_services";

    //columnas de uso masivo
    protected $fillable = [
        'name_solicited_services',
    ];
}

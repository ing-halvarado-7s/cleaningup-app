<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalServices extends Model
{
    use HasFactory;

    //Tabla
    protected $table = "personal_services";

    //columnas de uso masivo
    protected $fillable = [
        'name_personal_services',
    ];

     //Relacion: 1 personal puede realizar uno o varios servicios
     public function services() {
        return $this->hasMany(Services::class);
    }

}

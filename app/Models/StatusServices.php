<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusServices extends Model
{
    use HasFactory;

     //Tabla
     protected $table = "status_services";

     //columnas de uso masivo
     protected $fillable = [
         'name_status_services',
     ];

     //Relacion: 1 status pertenece a uno o varios servicios
     public function services() {
        return $this->hasMany(Services::class);
    }
}

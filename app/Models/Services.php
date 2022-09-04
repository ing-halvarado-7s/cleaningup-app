<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

     //Tabla
     protected $table = "services";

     //columnas de uso masivo
     protected $fillable = [
        'name_client',
        'mobile_number_client',
        'solicited_service_id',
        'comment_client',
        'date_service',
        'hour_service',
        'status_service_id',
        'cost_service',
        'personal_service_id',
     ];
}

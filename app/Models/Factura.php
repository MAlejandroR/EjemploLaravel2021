<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $hidden =["created_at", "updated_at"];  //Estos campos no apareceran al serializar un consulta

}

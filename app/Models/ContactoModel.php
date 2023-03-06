<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    protected $table = "contacto";
    public $timestamps = false;
    public $fillable = ['nombre','apellido','numero_telefono','email','mensaje'];
}

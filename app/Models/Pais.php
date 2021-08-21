<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'paises';
    public $timestamps = false;

    //Fillable
    protected $fillable = [
        'nombre', 'capital', 'poblacion', 'codigo_iso'
    ];

    //Hidden:
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Inserisco tutti i campi che ho come colonne nel database che posso modificare

    protected $fillable = [
        'poster',
        'name',
        'age',
        'company',
        'role',
        'description'
    ];
}

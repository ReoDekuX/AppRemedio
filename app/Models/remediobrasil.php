<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class remediobrasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'convenio',
        'medicamento',
        'dosagem',
        'preco',
    ];
}

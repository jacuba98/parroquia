<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmacion extends Model
{
    use HasFactory;
    protected $table = 'Confirmaciones';
    protected $fillable = ['name','apePat','apeMat','obispo','fechaC','namePat','nameMat','padrino','madrina','lugarN','fechaN','lugarB','fechaB'];
}

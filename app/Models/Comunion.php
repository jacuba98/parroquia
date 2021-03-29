<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunion extends Model
{
    use HasFactory;
    protected $table = 'Comuniones';
    protected $fillable = ['name','apePat','apeMat','fechaC','sacerdote','namePat','nameMat','padrino','madrina','lugarB','fechaB'];
}

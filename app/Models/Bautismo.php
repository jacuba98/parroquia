<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bautismo extends Model
{
    use HasFactory;
    protected $fillable = ['name','apePat','apeMat','namePat','nameMat','lugar','fechaN','fechaB','sacerdote','padrino','madrina','rc'];
}

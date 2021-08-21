<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    //campos que serão controlados
    protected $fillable = ['isbn', 'titulo', 'autor', 'preco'];
}

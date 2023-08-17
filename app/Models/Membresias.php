<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresias extends Model
{
    use HasFactory;
    protected $primaryKey = 'IDMEMBRESIA';
    protected $fillable = ['NOMBREMEMBRESIA', 'DESCRIPCION', 'PRECIO', 'PLANPAREJA'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religi extends Model
{
    use HasFactory;
    protected $table = 'Religi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'agama', 'alamat', 'tempat_lahir'
    ];
}

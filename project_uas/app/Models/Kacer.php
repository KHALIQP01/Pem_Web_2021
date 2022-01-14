<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kacer extends Model
{
    protected $table = "kacer";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'comment'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cendet extends Model
{
    protected $table = "cendet";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'comment'
    ];
}

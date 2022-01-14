<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muraibatu extends Model
{
    protected $table = "muraibatu";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'comment'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cucakrowo extends Model
{
    protected $table = "cucakrowo";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'comment'
    ];
}

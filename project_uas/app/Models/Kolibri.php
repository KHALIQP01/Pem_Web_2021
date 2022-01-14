<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolibri extends Model
{
    protected $table = "kolibri";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'comment'
    ];
}

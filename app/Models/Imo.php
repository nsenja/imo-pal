<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imo extends Model
{
    use HasFactory;
    protected $fillable = [
       'imo',
       'description'
    ];

    public static function index()
    {
        return Imo::all();
    }
}

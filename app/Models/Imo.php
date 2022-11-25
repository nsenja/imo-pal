<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imo extends Model
{
    use HasFactory;
    protected $fillable = [
       'id_barang',
       'no_part',
       'desc',
       'asal_kirim',
       'ekspedisi',
       'status_kirim'
    ];

    public static function index()
    {
        return Imo::all();
    }
}

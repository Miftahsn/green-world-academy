<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    use HasFactory;

    protected $table = 'pembinas';

    protected $fillable = [
        'user_id',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_telp',
        'alamat',
    ];
}

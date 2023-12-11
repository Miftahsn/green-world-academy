<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    use HasFactory;

    protected $table = 'profil_sekolah';

    protected $fillable = [
        'visi',
        'misi',
        'sejarah',
    ];
}

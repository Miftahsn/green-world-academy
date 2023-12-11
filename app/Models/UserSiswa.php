<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSiswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'user_id',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
    ];

    public function Siswa(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}

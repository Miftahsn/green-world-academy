<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TugasPekanan extends Model
{
    use HasFactory;

    protected $table = 'tugas';
    protected $fillable = [
        'id_pembina', 
        'tugas', 
        'soal', 
        'deskripsi_soal',
        'deadline',
    ];

    public function pembina(){
        return $this->belongsTo(User::class,'id_pembina', 'id');
    }
}

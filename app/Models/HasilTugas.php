<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTugas extends Model
{
    use HasFactory;

    protected $table = 'pengumpulan_tugas';

    protected $fillable = ['user_id', 'id_pembina', 'id_tugas', 'kendala', 'link'];

    public function siswa(){
        return $this->belongsTo(UserSiswa::class,'user_id', 'id');
    }
    public function tugas(){
        return $this->belongsTo(TugasPekanan::class,'id_tugas', 'id');
    }
    public function pembina(){
        return $this->belongsTo(User::class,'id_pembina', 'id');
    }
}

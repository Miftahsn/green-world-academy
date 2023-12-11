<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Kegiatan;
use App\Models\UserSiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index(){

        $user = User::count();
        $kegiatan = Kegiatan::count();
        $pembina = User::where('role', 2)->count();
        $siswa = User::where('role', 3)->count();
        return view('Template.index', compact('user', 'kegiatan', 'pembina', 'siswa'));
    }
}

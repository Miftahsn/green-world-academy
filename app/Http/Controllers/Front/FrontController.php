<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\InfoPendaftaran;
use App\Models\Kegiatan;
use App\Models\ProfileSekolah;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {
        return Inertia('Home');
    }
    public function about()
    {
        $profile = ProfileSekolah::all();
        return Inertia('About', compact('profile'));
    }
    public function infoPendaftaran()
    {
        $info = InfoPendaftaran::all();
        return Inertia('InfoPage', ['info' => $info]);
    }
    public function kegiatan()
    {
        $kegiatan = Kegiatan::all();
        return Inertia('Kegiatan', ['kegiatan' => $kegiatan]);
    }
}

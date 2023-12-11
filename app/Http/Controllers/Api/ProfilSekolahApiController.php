<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\ProfileSekolah;
use App\Http\Controllers\Controller;

class ProfilSekolahApiController extends Controller
{
    public function index()
    {
        $profileSekolah = ProfileSekolah::get()
            ->map(function ($profileSekolah) {
                return $this->format($profileSekolah);
            });
        return $this->response($profileSekolah);
    }

    public function format($profileSekolah)
    {
        return [
            'id' => $profileSekolah->id,
            'visi' => $profileSekolah->visi,
            'misi' => $profileSekolah->misi,
            'sejarah' => $profileSekolah->sejarah,
            'tanggal_tambah' => Carbon::parse($profileSekolah->created_at)->translatedFormat('d F Y'),
        ];
    }
    public function response($profileSekolah)
    {
        return response()->json([
            'status' => true,
            'data' => $profileSekolah,
        ], 200);
    }

    public function error($status, $message){
        return response()->json([
            'status'=> $status,
            'message' => $message,
        ], 200);
    }
}

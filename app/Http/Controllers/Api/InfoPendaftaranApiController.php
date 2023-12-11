<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InfoPendaftaran;

class InfoPendaftaranApiController extends Controller
{
    public function index()
    {
        $infoPendaftaran = InfoPendaftaran::get()
            ->map(function ($infoPendaftaran) {
                return $this->format($infoPendaftaran);
            });
        return $this->response($infoPendaftaran);
    }

    public function format($infoPendaftaran)
    {
        return [
            'id' => $infoPendaftaran->id,
            'info_pendaftaran' => $infoPendaftaran->info_pendaftaran,
            'tanggal_tambah' => Carbon::parse($infoPendaftaran->created_at)->translatedFormat('d F Y'),
        ];
    }
    public function response($infoPendaftaran)
    {
        return response()->json([
            'status' => true,
            'data' => $infoPendaftaran,
        ], 200);
    }

    public function error($status, $message){
        return response()->json([
            'status'=> $status,
            'message' => $message,
        ], 200);
    }
}

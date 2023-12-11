<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\TugasPekanan;
use Illuminate\Http\Request;
use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TugasPekananApiController extends Controller
{
    public function index()
    {
        $tugas = TugasPekanan::get()
            ->map(function ($tugas) {
                return $this->format($tugas);
            });
        return $this->response($tugas);
    }

    public function detail($id)
    {
        $tugas = TugasPekanan::where('id', $id)
            ->get()
            ->map(function ($tugas) {
                return $this->format($tugas);
            });
        return $this->response($tugas);
    }
    public function format($tugas)
    {
        return [
            'id' => $tugas->id,
            'id_pembina' => $tugas->id_pembina,
            'tugas' => $tugas->tugas,
            'soal' => $tugas->soal,
            'deskripsi_soal' => $tugas->deskripsi_soal,
            'deadline' => $tugas->deadline,
            'tanggal_tambah' => Carbon::parse($tugas->created_at)->translatedFormat('d F Y'),
        ];
    }
    public function response($tugas)
    {
        return response()->json([
            'status' => true,
            'data' => $tugas,
        ], 200);
    }

    public function error($status, $message)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
        ], 200);
    }
}

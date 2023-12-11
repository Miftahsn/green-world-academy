<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\kegiatan;
use Illuminate\Http\Request;
use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanApiController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::get()
            ->map(function ($kegiatan) {
                return $this->format($kegiatan);
            });
        return $this->response($kegiatan);
    }

    public function detail($id)
    {
        $kegiatan = Kegiatan::where('id', $id)
            ->get()
            ->map(function ($kegiatan) {
                return $this->format($kegiatan);
            });
        return $this->response($kegiatan);
    }

    public function tambah(Request $request){

        $validasi = Validator::make($request->all(), [
            'judul' => 'required',
            'kegiatan' => 'required',
            'galeri' => 'required',
        ]);

        if ($validasi->fails()) {

            $valIndex = $validasi->errors()->all();
            return MessageHelper::error(false, $valIndex[0]);
        }

        $request->validate([
            'judul' => 'required',
            'kegiatan' => 'required',
            'galeri' => 'image|mimes:jpeg,png,jpg,gif,sfg',
        ]);
        $img_kegiatan = $request->file('galeri');
        $namaFile = time() . '.' . $img_kegiatan->getClientOriginalExtension();
        $img_kegiatan->move(public_path('img'), $namaFile);

        $kegiatan = Kegiatan::create([
            'judul' => $request->judul,
            'kegiatan' => $request->kegiatan,
            'galeri' => $namaFile,
        ]);

        $kegiatan = Kegiatan::where('id', $kegiatan->id)
            ->get()
            ->map(function ($kegiatan) {
                return $this->format($kegiatan);
            });
        
        return $this->response($kegiatan);
    }
    public function format($kegiatan)
    {
        return [
            'id' => $kegiatan->id,
            'kegiatan' => $kegiatan->kegiatan,
            'tanggal_tambah' => Carbon::parse($kegiatan->created_at)->translatedFormat('d F Y'),
        ];
    }
    public function response($kegiatan)
    {
        return response()->json([
            'status' => true,
            'data' => $kegiatan,
        ], 200);
    }

    public function error($status, $message){
        return response()->json([
            'status'=> $status,
            'message' => $message,
        ], 200);
    }
}

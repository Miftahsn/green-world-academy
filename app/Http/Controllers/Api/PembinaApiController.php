<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\FormatHelper;
use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PembinaApiController extends Controller
{
    public function pembina(){
        $pembina = User::where('role', 2)
            ->get()
            ->map(function ($pembina) {
                return FormatHelper::formatResultAuth($pembina);
            });
        $pesan = "Berhasil ambil data";
        return MessageHelper::resultAuth(true, $pesan, $pembina, 200);
    }

    public function tambahPembina(Request $request){
        $validasi = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'image' => ['required'],
        ]);

        if ($validasi->fails()) {

            $valIndex = $validasi->errors()->all();
            return MessageHelper::error(false, $valIndex[0]);
        }

        $foto = $request->file('image');
        $namaFile = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('img'), $namaFile);

        $pembina = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 2,
            'password' => Hash::make($request->password),
            'image' => $request->$namaFile
        ]);

        $detail = FormatHelper::resultUser($pembina->id);

        $pesan = "Berhasil Menambah pembina";
        return MessageHelper::resultAuth(true, $pesan, $detail, 200);
    }

    public function hapusPembina(Request $request){
        $pembina = User::where('id', $request->id)->first();

        if(!$pembina) {
            return MessageHelper::error(false, 'Data tidak ditemukan');

        }

        Storage::delete($pembina->img);
        $pembina->delete();

        return MessageHelper::error(true, 'Data Berhasil Dihapus');
    }

    public function updatePembina(Request $request, $id){
        $pembina = User::where('id', $id)->first();

        if(!$pembina) {
            return MessageHelper::error(false, "pembina $pembina->username tidak ditemukan");
        }

        if($pembina->role !== 2){
            return MessageHelper::error(false, "$pembina->username bukan pembina!");
        }

        $pembina->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 2,
            'password' => Hash::make($request->password),
        ]);

        $detail = FormatHelper::resultUser($pembina->id);

        $pesan = "Berhasil edit pembina";
        return MessageHelper::resultAuth(true, $pesan, $detail, 200);
    }

}

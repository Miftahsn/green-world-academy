<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfoPendaftaran;
use Illuminate\Http\Request;

class InfoPendaftaranController extends Controller
{
    public function infoDaftar(){

        $info = InfoPendaftaran::all();
        return view('Admin.InfoDaftar.infoDaftar', compact('info'));
    }
    public function createInfoDaftar()
    {

        return view('Admin.Infodaftar.createIP');
    }

    public function storeInfoDaftar(Request $request)
    {
        InfoPendaftaran::create([
            'info_pendaftaran' => $request->info_pendaftaran,
        ]);

        return redirect()->route('info.daftar')->with('Create', 'Berhasil tambah data!');
    }

    public function editInfoDaftar($id)
    {

        $info = InfoPendaftaran::findOrFail($id);
        return view('Admin.InfoDaftar.editIP', compact('info'));
    }

    public function updateInfoDaftar(Request $request, $id)
    {
        $info = InfoPendaftaran::findOrFail($id);

        $info->info_pendaftaran = $request->info_pendaftaran;

        $info->update();

        return redirect()->route('info.daftar')->with('Update', "Info Pendaftaran Berhasil diupdate !");
    }

    public function lihatInfoDaftar($id){

        $info = InfoPendaftaran::findOrFail($id);
        return view('Admin.InfoDaftar.showIP', compact('info'));
    }
}

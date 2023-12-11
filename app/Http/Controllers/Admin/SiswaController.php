<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserSiswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index()
    {

        $siswa = User::where('role', 3)->get();

        return view('Admin.dataSiswa.dataSiswa', compact('siswa'));
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $siswa = User::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $siswa = User::where('role', 3)->get();
        }

        return view('Admin.dataSiswa.dataSiswa', compact('siswa'));
    }
    public function createSiswa()
    {
        return view('Admin.dataPembina.createPembina');
    }

    public function storeSiswa(Request $request)
    {
        $foto = $request->file('image');
        $namaFile = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('img'), $namaFile);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 3,
            'password' => Hash::make($request->password),
            'image' => $namaFile
        ]);

        return redirect()->route('index.dataSiswa')->with('Create', "Berhasil menambah data $request->name");
    }

    public function editSiswa($id){
        $siswa = User::findOrFail($id);
        return view('Admin.dataSiswa.editSiswa', compact('siswa'));
    }
    public function updateSiswa(Request $request, $id)
    {
        $gambar = User::findOrFail($id);

        if ($request->file('image') == "") {

            $gambar([
                // 'name' => $request->name,
                'username' => $request->username,
                // 'email' => $request->email,
            ]);

        } else {
            $image = $request->file('image');
            $namaFile = time() .'.'. $image->getClientOriginalExtension();
            $image->move(public_path('img'), $namaFile);

            $gambar->update([
                // 'name' => $request->name,
                'username' => $request->username,
                // 'email' => $request->email,
                'image' => $namaFile,
            ]);
        }

        return redirect()->route('index.dataSiswa')->with('Update', "Berhasil menambah image $request->name");
    }
    public function deleteSiswa(Request $request)
    {
        $siswa = User::findOrFail($request->id);
        Storage::delete($siswa->image);
        $siswa->delete();

        return redirect()->back()->with('Delete', "Berhasil menghapus data");
    }
}

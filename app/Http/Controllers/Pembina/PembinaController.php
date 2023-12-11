<?php

namespace App\Http\Controllers\Pembina;

use App\Models\User;
use App\Models\Kegiatan;
use App\Models\UserSiswa;
use App\Models\HasilTugas;
use App\Models\TugasPekanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PembinaController extends Controller
{
    public function index()
    {
        $tugas = HasilTugas::count();
        $kegiatan = TugasPekanan::count();
        $pembina = User::where('role', 2)->count();
        $siswa = User::where('role', 3)->count();
        return view('Pembina.indexPembina', compact('tugas', 'kegiatan', 'pembina', 'siswa'));
    }

    public function profilePembina()
    {

        $id = Auth::user()->id;
        $profile = User::where('id', $id)->first();
        return view('Pembina.profilePembina', compact('profile'));
    }

    public function editProfile($id)
    {
        $id = Auth::user()->id;
        $profile = User::where('id', $id)->first();
        return view('Pembina.updateProfile', compact('profile'));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $gambar = User::findOrFail($id);

        if ($request->file('image') == "") {

            $gambar([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]);
        } else {
            $image = $request->file('image');
            $namaFile = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $namaFile);

            $gambar->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'image' => $namaFile,
            ]);
        }

        // $profile = User::findOrFail($id);

        // if ($request->hasFile('image')) {

        //     $gambar = $request->file('image');
        //     $gambar->storeAs('public/images', $gambar->hashName());

        //     Storage::delete('public/images' . $profile->image);

        //     $profile->update([
        //         'image' => $gambar->hashName(),
        //     ]);
        // } else {
        //     $profile->name = $request->name;
        //     $profile->username = $request->username;
        //     $profile->email = $request->email;
        //     $profile->image = $request->file('image')->store('img-pembina');
        // }

        // $profile->update();

        return redirect()->route('profile.pembina')->with('Update', "Data $request->name Berhasil Di update !");
    }

    public function tugasPekanan()
    {

        $tugas = TugasPekanan::all();
        return view('Pembina.Tugas.tugasPekanan', compact('tugas'));
    }

    public function createTugas(Request $request)
    {
        $pembina = User::where('role', 2)->get();
        return view('Pembina.Tugas.createTP', compact('pembina'));
    }

    public function storeTugas(Request $request)
    {

        TugasPekanan::create([
            'id_pembina' => $request->id_pembina,
            'tugas' => $request->tugas,
            'soal' => $request->soal,
            'deskripsi_soal' => $request->deskripsi_soal,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('tugas.pekanan')->with('Create', 'Berhasil menambahkan tugas!');
    }
    public function searchTugas(Request $request)
    {
        if ($request->has('search')) {
            $tugas = TugasPekanan::where('tugas', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $tugas = TugasPekanan::all();
        }

        return view('Pembina.Tugas.tugasPekanan', compact('tugas'));
    }

    public function editTugas($id)
    {

        $tugas = TugasPekanan::findOrFail($id);
        $pembina = User::where('role', 2)->get();
        return view('Pembina.Tugas.editTP', compact('tugas', 'pembina'));
    }

    public function updateTugas(Request $request, $id)
    {

        $tugas = TugasPekanan::findOrFail($id);
        $tugas->tugas = $request->tugas;
        $tugas->soal = $request->soal;
        $tugas->deskripsi_soal = $request->deskripsi_soal;
        $tugas->deadline = $request->deadline;

        $tugas->update();

        return redirect()->route('tugas.pekanan')->with('Update', 'Berhasil edit tugas!');
    }

    public function showTugas($id)
    {
        $tugas = TugasPekanan::findOFail($id);
        return view('Pembina.Tugas.showTP', compact('tugas'));
    }

    public function hasilTugas()
    {
        $hasilTugas = HasilTugas::all();
        return view('Pembina.Tugas.hasilTP', compact('hasilTugas'));
    }

    public function searchHasilTugas(Request $request)
    {
        if ($request->has('search')) {
            $hasilTugas = HasilTugas::where('id_tugas', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $hasilTugas = HasilTugas::all();
        }
        return view('Pembina.Tugas.hasilTP', compact('hasilTugas'));
    }

    public function siswaData()
    {

        $siswa = User::where('role', 3)->get();
        return view('Pembina.siswaData', compact('siswa'));
    }

    public function searchSiswa(Request $request)
    {
        if ($request->has('search')) {
            $siswa = User::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $siswa = User::where('role', 3)->get();
        }

        return view('Pembina.siswaData', compact('siswa'));
    }
}

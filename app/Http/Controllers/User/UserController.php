<?php

namespace App\Http\Controllers\User;

use App\Models\KumpulkanTugas;
use App\Models\User;
use App\Models\UserSiswa;
use App\Models\TugasPekanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HasilTugas;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){

        $kegiatan = Kegiatan::count();
        $tugas = TugasPekanan::count();
        $siswa = User::where('role', 3)->count();

        return view('User.indexUser', compact('kegiatan', 'tugas', 'siswa'));
    }

    public function profileUser(){

        $id = Auth::user()->id;
        $image = User::where('id', $id)->first();
        $profile = UserSiswa::where('user_id', $id)->first();
        return view('User.profileUser', compact('profile', 'image'));
    }

    public function updateProfile(Request $request, $id)
    {
        $profile = UserSiswa::findOrFail($id);
        $profile->tanggal_lahir = $request->tanggal_lahir;
        $profile->jenis_kelamin = $request->jenis_kelamin;
        $profile->alamat = $request->alamat;
        $profile->no_telp = $request->no_telp;

        $profile->update();

        return redirect()->route('profile.user');
    }

    public function tugas(){

        $tugas = TugasPekanan::all();
        return view('User.tugasUser', compact('tugas'));
    }

    public function detailTugas($id){
        $tugas = TugasPekanan::findOrFail($id);
        return view('User.detailTugasUser', compact('tugas'));
    }

    public function kirimTugas($id){
        
        $user = Auth::user()->id;
        $siswa = User::where('id', $user)->first();
        $tugas = TugasPekanan::findOrFail($id);
        return view('User.kirimTugas', compact('tugas', 'siswa'));
    }
    public function submitTugas(Request $request){

        // dd($request->all());
        HasilTugas::create([
            'user_id' => $request->user_id,
            'id_pembina' => $request->id_pembina,
            'id_tugas' => $request->id_tugas,
            'kendala' => $request->kendala,
            'link' => $request->link,
        ]);

        return redirect()->route('user.tugas')->with('Create','Berhasil mengirimkan tugas');
    }

    public function tugasTerkirim(){

        // $siswa = Auth::user()->id;
        // $tugasTerkirim = HasilTugas::where('user_id', $siswa)->first();
        $tugasTerkirim = HasilTugas::all();

        return view('User.tugasTerkirim', compact('tugasTerkirim'));
    }

    public function editTugas($id){
        $tugas = HasilTugas::findOrFail($id);
        return view('User.editTugas', compact('tugas'));
    }

    public function updateTugasTerkirim(Request $request, $id)
    {
        $tugasTerkirim = HasilTugas::findOrFail($id);
        $tugasTerkirim->link = $request->link;
        $tugasTerkirim->kendala = $request->kendala;

        $tugasTerkirim->update();

        return redirect()->route('user.tugas.terkirim')->with('Update', 'Berhasil Edit Tugas!');
    }
    public function searchTugas(Request $request)
    {
        if ($request->has('search')) {
            $tugas = TugasPekanan::where('tugas', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $tugas = TugasPekanan::all();
        }

        return view('User.tugasUser', compact('tugas'));
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $tugasTerkirim = HasilTugas::where('user_id', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $tugasTerkirim = HasilTugas::all();
        }

        return view('User.tugasTerkirim', compact('tugasTerkirim'));
    }
}

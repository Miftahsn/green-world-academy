<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileSekolah;
use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function index()
    {

        $profile = ProfileSekolah::all();

        return view('Admin.profilSekolah.profileSekolah', compact('profile'));
    }
    public function createProfile()
    {

        return view('Admin.profilSekolah.createPS');
    }

    public function storeProfile(Request $request)
    {

        ProfileSekolah::create([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'sejarah' => $request->sejarah,
        ]);

        return redirect()->route('index.profile.sekolah')->with('Create', 'Berhasil tambah data!');
    }

    public function editProfile($id)
    {

        $profile = ProfileSekolah::findOrFail($id);
        return view('Admin.profilSekolah.editPS', compact('profile'));
    }

    public function updateProfile(Request $request, $id)
    {
        $profile = ProfileSekolah::findOrFail($id);

        $profile->visi = $request->visi;
        $profile->misi = $request->misi;
        $profile->sejarah = $request->sejarah;

        $profile->update();

        return redirect()->route('index.profile.sekolah')->with('Update', "Profile Sekolah Berhasil Di Update !");
    }

    public function visi($id)
    {

        $profile = ProfileSekolah::findOrFail($id);
        return view('Admin.profilSekolah.visi', compact('profile'));
    }

    public function misi($id)
    {

        $profile = ProfileSekolah::findOrFail($id);
        return view('Admin.profilSekolah.misi', compact('profile'));
    }
    public function sejarah($id)
    {

        $profile = ProfileSekolah::findOrFail($id);
        return view('Admin.profilSekolah.sejarah', compact('profile'));
    }

}

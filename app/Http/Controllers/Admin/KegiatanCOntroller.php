<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KegiatanCOntroller extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('Admin.Kegiatan.kegiatan', compact('kegiatan'));
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $kegiatan = Kegiatan::where('judul', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $kegiatan = Kegiatan::all();
        }

        return view('Admin.Kegiatan.kegiatan', compact('kegiatan'));
    }
    public function createKegiatan()
    {
        return view('Admin.Kegiatan.createKegiatan');
    }

    public function storeKegiatan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'galeri' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'kegiatan' => 'required',
        ]);

        $image = $request->file('galeri');
        $namaFile = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $namaFile);

        Kegiatan::create([
            'judul' => $request->judul,
            'galeri' => $namaFile,
            'kegiatan' => $request->kegiatan,
        ]);

        return redirect()->route('index.kegiatan')->with('Create', "Berhasil menambah data $request->judul");
    }

    public function editKegiatan($id){
        
        $kegiatan = Kegiatan::findOrFail($id);
        return view('Admin.Kegiatan.updateKegiatan', compact('kegiatan'));
    }

    public function updateKegiatan(Request $request, $id)
    {
        $galeri = Kegiatan::findOrFail($id);

        if ($request->file('galeri') == "") {

            $galeri([
                'judul' => $request->judul,
                'kegiatan' => $request->kegiatan
            ]);
            
        } else {
            $image = $request->file('galeri');
            $namaFile = time() .'.'. $image->getClientOriginalExtension();
            $image->move(public_path('img'), $namaFile);

            $galeri->update([
                'judul' => $request->judul,
                'kegiatan' => $request->kegiatan,
                'galeri' => $namaFile,
            ]);
        }

        return redirect()->route('index.kegiatan')->with('Update', "Data $request->judul Berhasil Di update !");
    }

    public function deleteKegiatan(Request $request)
    {
        $pembina = Kegiatan::findOrFail($request->id);
        Storage::delete($pembina->galeri);
        $pembina->delete();

        return redirect()->back()->with('Delete', "Berhasil menghapus data");
    }
}

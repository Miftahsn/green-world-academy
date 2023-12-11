<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PembinaController extends Controller
{
    public function index()
    {

        $pembina = User::where('role', 2)->get();

        return view('Admin.dataPembina.pembina', compact('pembina'));
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $pembina = User::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $pembina = User::where('role', 2)->get();
        }

        return view('Admin.dataPembina.pembina', compact('pembina'));
    }

    public function createPembina()
    {
        return view('Admin.dataPembina.createPembina');
    }

    public function storePembina(Request $request)
    {
        // User::create([
        //     'name'=>$request->name,
        //     'username'=>$request->username,
        //     'email'=>$request->email,
        //     'role' => 2,
        //     'password'=>Hash::make($request->password),
        //     'image' => $request->file('image')->store('img-pembina'),
        // ]);

        $foto = $request->file('image');
        $namaFile = time() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('img'), $namaFile);

        User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'role' => 2,
                'password' => Hash::make($request->password),
                'image' => $namaFile
            ]);

        return redirect()->route('index.dataPembina')->with('Create', "Berhasil menambah data $request->name");
    }

    public function deletePembina(Request $request)
    {
        $pembina = User::findOrFail($request->id);
        Storage::delete($pembina->image);
        $pembina->delete();

        return redirect()->back();
    }

}

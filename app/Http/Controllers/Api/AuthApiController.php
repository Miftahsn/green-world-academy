<?php

namespace App\Http\Controllers\Api;

use App\Helpers\FormatHelper;
use App\Models\UserSiswa;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthApiController extends Controller
{
    public function register(Request $request)
    {
        // validate data

        $validasi = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if ($validasi->fails()) {

            $valIndex = $validasi->errors()->all();
            // return $this->error(false, $valIndex[0]);
            return MessageHelper::error(false, $valIndex[0]);
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        UserSiswa::create([
            'user_id' => $user->id,
        ]);


        $detail = FormatHelper::resultUser($user->id);

        $pesan = "Berhasil registrasi";
        return MessageHelper::resultAuth(true, $pesan, $detail, 200);
    }

    public function login(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email' => ['required', 'email',],
            'password' => ['required',],
        ]);

        if ($validasi->fails()) {

            $valIndex = $validasi->errors()->all();
            return MessageHelper::error(false, $valIndex[0]);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {

            if (password_verify($request->password, $user->password)) {

                $detail = FormatHelper::resultUser($user->id);

                $pesan = "Selamat Datang, $user->name!";
                return MessageHelper::resultAuth(true, $pesan, $detail, 200);

            } else {
                return MessageHelper::error(false,"Password Salah");
            }
        } else {
            return MessageHelper::error(false,"Akun Tidak Terdaftar");
        }
    }
}

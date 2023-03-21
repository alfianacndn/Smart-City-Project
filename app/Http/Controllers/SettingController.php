<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\setting_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(setting_model $setting_model)
    {
        $this->middleware('auth');
        $this->setting_model = $setting_model;
    }
    public function index()
    {
        return view('user.setting');
    }

    public function insert()
    {

        Request()->validate([
            'alamat' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
        ], [
            'alamat.required' => 'Isikan Alamat Anda',
            'foto.required' => 'Masukkan Foto Anda',
        ]);

        $file = Request()->foto;
        $fileName = Auth::user()->email . '.' . $file->extension();
        $file->move(public_path('gambar_profil'), $fileName);

        $data = [
            'nama' => Auth::user()->name,
            'email' => Auth::user()->email,
            'alamat' => request()->alamat,
            'foto' => $fileName,
        ];
        $this->setting_model->addData($data);
        return redirect()->route('account');
    }
}

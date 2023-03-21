<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use App\Models\newpost_model;
use Kreait\Firebase\ServiceAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(newpost_model $newpost_model)
    {
        $this->middleware('auth');
        $this->newpost_model = $newpost_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $a = DB::table('users')->where('level', 2)->value('level');
        $b = DB::table('users')->where('email', Auth::user()->email)->value('level');
        if ($a == $b) {
            $data = DB::table('db_pos')->ORDERBY("waktu_pos", "DESC")->get();
            return view('user.dashboard', compact('data'));
        } else {
            $data = DB::table('db_pos')->ORDERBY("waktu_pos", "DESC")->get();
            return view('Admin.home', compact('data'));
        }
    }

    public function newpost_index()
    {

        return view('admin.newpost');
    }

    public function insert()
    {

        Request()->validate([]);

        $file = Request()->foto;
        $fileName = Request()->judul_pos . '.' . $file->extension();
        $file->move(public_path('gambar_post'), $fileName);

        $data = [
            'judul_pos' => Request()->judul_pos,
            'isi_pos' => Request()->isi_pos,
            'waktu_pos' => date("d-m-y"),
            'gambar' =>  $fileName

        ];

        $this->newpost_model->addData($data);
        return redirect()->route('admin.home');
    }
}

<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\smartlight_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

class SmartLightController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(smartlight_model $smartlight_model)
    {
        $this->middleware('auth');
        $this->smartlight_model = $smartlight_model;
    }
    public function index()
    {
        $d = Auth::user()->name . 'SL';
        $simpan = DB::table('tb_integrasi')->where('kode_integrasi', $d)->value('kode_integrasi');
        if ($d == $simpan) {
            $c = Auth::user()->name;
            $b = $c . 'SL';
            $a = DB::table('tb_integrasi')->where('kode_integrasi', $d)->value('kode_barang');
            $data = DB::table('tb_barang')->where('kode_barang', $a)->first();
            return view('User.smartlight', compact('data', 'b', 'c', 'a'));
        } else {
            return view('User.first.smartlight', compact('d'));
        }
    }
    public function insert()
    {
        Request()->validate([
            'kode_barang' => 'required',
            'kode_integrasi' => 'unique:tb_integrasi,kode_integrasi'
        ], [
            'kode_barang.required' => "Scan Smart Light Anda",
        ]);

        $data = [
            'kode_integrasi' => Auth::user()->name . 'SL',
            'nama_usser' => Auth::user()->name,
            'kode_barang' => Request()->kode_barang,
        ];

        $g = DB::table('tb_barang')
            ->select('kode_barang')
            ->where('kode_barang', 'LIKE', '%sl%')
            ->value('kode_barang');
        if (Request()->kode_barang == $g) {
            $this->smartlight_model->addData($data);
            return redirect()->route('user.smartl');
        } else {
            return redirect()->route('user.smartl')->with('pesan', 'Kode Barang Tidak Terekam Pada Database Kami');
        }
    }
}

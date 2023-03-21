<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

class SmartAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table('tb_barang')->where('produk', 'Smart Energy')->get();
        return view('admin.smartenergy', compact('data'));
    }

    public function indexl()
    {
        $data = DB::table('tb_barang')->where('produk', 'Smart Light')->get();
        return view('admin.smartlight', compact('data'));
    }
}

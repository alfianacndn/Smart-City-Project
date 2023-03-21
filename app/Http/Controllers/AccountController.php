<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\account_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(account_model $account_model)
    {
        $this->middleware('auth');
        $this->account_model = $account_model;
    }
    public function index()
    {
        $tersimpan = DB::table('db_user')->where('email', Auth::user()->email)->value('email');;

        if ($tersimpan == Auth::user()->email) {
            $SL = Auth::user()->name . 'SL';
            $SE = Auth::user()->name . 'SE';
            $barangSL = DB::table('tb_integrasi')->where('kode_integrasi', $SL)->value('kode_barang');
            $barangSE = DB::table('tb_integrasi')->where('kode_integrasi', $SE)->value('kode_barang');
            $a = DB::table('db_user')->where('email', Auth::user()->email)->first();
            $b = DB::table('db_user')->where('email', Auth::user()->email)->value('email');
            if (Auth::user()->email == $b) {

                return view('user.account', compact('a', 'barangSL', 'barangSE', 'SL', 'SE'));
            } else {
                $cekSE = DB::table('tb_integrasi')->where('kode_integrasi', $SE)->value('kode_integrasi');
                $cekSL = DB::table('tb_integrasi')->where('kode_integrasi', $SL)->value('kode_integrasi');

                if ($cekSE == Auth::user()->name . 'SE' && $cekSL == Auth::user()->name . 'SL') {
                    return view('user.first.account', compact('barangSL', 'barangSE'));
                } else {
                    return view('user.first.account2');
                }
            }
        } else {
            return view('user.setting');
        }
    }
}

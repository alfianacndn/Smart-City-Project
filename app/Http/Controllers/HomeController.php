<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Http\Controllers\Controller;
use App\Models\smartlight_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->smartlight_model = new smartlight_model();
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

    public function keadaan()
    {
        return view('User.realtime.keadaan');
    }
    public function message()
    {
        return view('User.message');
    }
    public function history()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/firebaseService.json');
        $database = $factory->createDatabase();

        $ref = $database->getReference("History");
        $realtime = $ref->getValue();



        return view('User.history', compact('realtime'));
    }
    public function smartlight()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/firebaseService.json');
        $database = $factory->createDatabase();

        $ref = $database->getReference("DataUpdateTerakhir");
        $lampu = $ref->getValue();



        return view('User.realtime.smartlight', compact('lampu'));
    }
    public function smartenergy()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/firebaseService.json');

        $database = $factory->createDatabase();


        $ref = $database->getReference("DataUpdateTerakhir");
        $SE = $ref->getValue();

        return view('User.realtime.smartenergy', compact('SE'));
    }


    public function smartcity(Request $request)
    {
        return view('user.smartcity');
        $data = DB::table('tb_integrasi')->insert([
            'nama' => $request->nama,
            'smart_light' => $request->smart_light,
            'smart_energy' => $request->smart_energy
        ]);
        return redirect('User.smartcity');
    }
    public function user_smartlight()
    {
        $a = Auth::user()->name;
        $data = DB::table('tb_barang')->where('kode_barang', $a)->first();
        return view('User.smartlight', compact('data', 'a'));
        $data = [
            'nama_usser' => Auth::user()->name,
            'kode_barang' => Request()->kode_barang,
        ];

        $this->smartlight_model->addData($data);
        return redirect()->route('user_smartlight')->with('pesan', 'Data Berhasl Di Tambahkan');
    }
    public function user_smartenergy()
    {
        return view('User.smartenergy');
    }
    public function powercalculation()
    {
        return view('User.powercalculation');
    }
}

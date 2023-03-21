<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\admin_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

class SmartCityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(admin_model $admin_model)
    {
        $this->middleware('auth');
        $this->admin_model = $admin_model;
    }
    public function indexSE()
    {
        return view('admin.addsmartenergy');
    }
    public function indexSL()
    {
        return view('admin.addsmartlight');
    }

    public function profileuser()
    {


        $data = DB::table('db_user')->get();
        $data2 = DB::table('users')->get();
        return view('admin.profileuser', compact('data', 'data2'));
    }

    public function insertSE()
    {

        Request()->validate(
            [
                'kode_barang' => 'required',
                'produk' => 'Smart Energy',
                'merk_panel' => 'required',
                'spesifikasi_panel' => 'required',
                'merk_accu' => 'required',
                'spesifikasi_accu' => 'required',
                'merk_servo' => 'required',
                'spesifikasi_servo' => 'required',
                'merk_inverter' => 'required',
                'spesifikas_inverter' => 'required',
                'gambar_servo' => 'required|mimes:jpg,jpeg,png',
                'gambar_panel' => 'required|mimes:jpg,jpeg,png',
                'gambar_accu' => 'required|mimes:jpg,jpeg,png',
                'gambar_inverter' => 'required|mimes:jpg,jpeg,png',
                'kode_barang' => 'required',
            ]

        );

        $filepanel = Request()->gambar_panel;
        $fileNamePanel = Request()->kode_barang . 'panel' . '.' . $filepanel->extension();
        $filepanel->move(public_path('gambar'), $fileNamePanel);

        $fileaccu = Request()->gambar_accu;
        $fileNameAccu = Request()->kode_barang . 'accu' . '.' . $fileaccu->extension();
        $fileaccu->move(public_path('gambar'), $fileNameAccu);

        $fileservo = Request()->gambar_servo;
        $fileNameServo = Request()->kode_barang . 'servo' . '.' . $fileservo->extension();
        $fileservo->move(public_path('gambar'), $fileNameServo);

        $fileinverter = Request()->gambar_inverter;
        $fileNameInverter = Request()->kode_barang . 'inverter' . '.' . $fileinverter->extension();
        $fileinverter->move(public_path('gambar'), $fileNameInverter);

        $data = [
            'kode_barang' => Request()->kode_barang,
            'produk' => 'Smart Energy',
            'merk_panel' => Request()->merk_panel,
            'spesifikasi_panel' => Request()->spesifikasi_panel,
            'merk_accu' => Request()->merk_accu,
            'spesifikasi_accu' => Request()->spesifikasi_accu,
            'merk_servo' => Request()->merk_servo,
            'spesifikasi_servo' => Request()->spesifikasi_servo,
            'merk_inverter' => Request()->merk_inverter,
            'spesifikas_inverter' => Request()->spesifikasi_inverter,
            'gambar_servo' => Request()->$fileNameServo,
            'gambar_panel' => Request()->$fileNamePanel,
            'gambar_accu' => Request()->$fileNameAccu,
            'gambar_inverter' => Request()->$fileNameInverter,
        ];

        $this->admin_model->addData($data);
        return redirect()->route('admin.smartenergy');
    }

    public function insertSL()
    {
        Request()->validate(
            [
                'watt_lampu' => 'required|numeric',
                'gambar_lampu' => 'required|mimes:jpg,jpeg,png',
                'kode_barang' => 'required',
                'merk_lampu' => 'required'
            ]
        );
        $filelampu = Request()->gambar_lampu;
        $fileNameLampu = Request()->kode_barang . 'lampu' . '.' . $filelampu->extension();
        $filelampu->move(public_path('gambar'), $fileNameLampu);
        $data = [
            'kode_barang' => Request()->kode_barang,
            'produk' => 'Smart Light',
            'merk_lampu' => Request()->merk_lampu,
            'watt_lampu' => Request()->watt_lampu . 'Watt',
            'gambar_lampu' => $fileNameLampu,
        ];
        $this->admin_model->addData($data);
        return redirect()->route('admin.smartlight');
    }
}

<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\chat_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\PseudoTypes\True_;
use PhpParser\Node\Stmt\Echo_;

class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(chat_model $chat_model)
    {
        $this->middleware('auth');
        $this->chat_model = $chat_model;
    }

    public function index()
    {
        $c = Auth::user()->email;
        $b = $c . 'ADMIN';
        $a = DB::table('tb_chat')
            ->where([

                [
                    'kode_chat', '=', $b

                ]
            ])->get();
        $d = DB::table('tb_chat')->where('penerima', $c)->value('isi_pesan');
        return view('user.message', compact('c', 'a', 'b', 'd'));
    }

    public function insert()
    {
        Request()->validate(
            []

        );

        $data = [
            'pengirim' => Auth::user()->email,
            'penerima' => 'Admin',
            'isi_pesan' => Request()->pesan,
            'kode_chat' => Auth::user()->email . 'ADMIN',
            'tanggal_kirim' => date("Y-m-d H:i:s"),
        ];

        $this->chat_model->addData($data);
        return redirect()->route('message.user');
    }

    public function insertadmin()
    {
        Request()->validate(
            []

        );

        $data = [
            'pengirim' => 'Admin',
            'penerima' => Request()->penerima,
            'isi_pesan' => Request()->pesan,
            'kode_chat' => Request()->penerima . 'ADMIN',
            'tanggal_kirim' => date("Y-m-d H:i:s"),
        ];

        $this->chat_model->addData($data);
        return redirect()->route('message.admin');
    }

    public function indexadmin()
    {
        $d = DB::table('tb_chat')->get();
        return view('admin.message', compact('d'));
    }
}

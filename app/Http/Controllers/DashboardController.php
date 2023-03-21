<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use App\Models\integration_model;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $auth, $database;

    public function __construct(integration_model $integration_model)
    {
        $this->middleware('auth');
        $factory = (new Factory)
            ->withServiceAccount(__DIR__ . '\firebaseService.Json')
            ->withDatabaseUri('https://smartcity-gbaz-ae18-default-rtdb.firebaseio.com');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
        $this->integration_model = $integration_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $email = Auth::user()->email;
        $pass = Auth::user()->pass;

        try {
            $newUser = $this->auth->CreateUserWithEmailAndPassword($email, $pass);
            // dd($newUser);
        } catch (\Throwable $e) {
        }

        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($email, $pass);

            Session::put('firebaseUserId', $signInResult->firebaseUserId());
            Session::put('idToken', $signInResult->idToken());
            Session::save();
        } catch (\Throwable $e) {
        }

        $a = Session::get('firebaseUserId');
        $b = Auth::user()->name;

        if (Session::has('firebaseUserId') && Session::has('idToken')) {
            // dd("User masih login.");
            $this->auth->revokeRefreshTokens(Session::get('firebaseUserId'));
            Session::forget('firebaseUserId');
            Session::forget('idToken');
            Session::save();
        } else {
        }

        return view('User.integration', compact('pass', 'a', 'b'));
    }

    public function logout()
    { {
            if (Session::has('firebaseUserId') && Session::has('idToken')) {
                // dd("User masih login.");
                $this->auth->revokeRefreshTokens(Session::get('firebaseUserId'));
                Session::forget('firebaseUserId');
                Session::forget('idToken');
                Session::save();
                dd("User berhasil logout.");
            } else {
                dd("User belum login.");
            }
        }
    }

    public function insert()
    {
        Request()->validate([]);

        $data = [
            'nama' => request()->nama,
            'no_telp' => request()->telp,
            'uid' => request()->uid,

        ];
        $this->integration_model->addData($data);
        return redirect()->route('user.integration');
    }
}

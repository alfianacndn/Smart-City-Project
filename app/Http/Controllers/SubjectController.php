<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class SubjectController extends Controller
{
    public function daya()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/firebaseService.json');

        $database = $factory->createDatabase();


        $ref = $database->getReference("daya");

        $daya = $ref->getValue();

        foreach ($daya as $daya_) {
            $all_daya[] = $daya_;
        }
        return view('User.realtime.smartenergy', compact('all_daya'));
    }
}

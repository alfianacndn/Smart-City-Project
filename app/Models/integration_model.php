<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class integration_model extends Model
{
    public function addData($data)
    {
        return DB::table('tb_integrasiakun')->insert($data);
    }
}

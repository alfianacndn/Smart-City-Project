<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin_model extends Model
{
    public function addData($data)
    {
        return DB::table('tb_barang')->insert($data);
    }
}

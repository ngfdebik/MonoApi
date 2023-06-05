<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;


    public static function deleteByUserId($userId){
        DB::table('addresses')
        ->where('user_id', $userId)
        ->delete();
    }
}

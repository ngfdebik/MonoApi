<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public static function getRandomUserId(){
        return DB::table('users')
                ->select('id')
                ->inRandomOrder()
                ->first();
    }
}

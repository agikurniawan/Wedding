<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rias;
// use App\Fotos;
use App\Venues;
use App\User; 

class Rias extends Model
{
    //
    protected $table = 'riasb';
    protected $fillable = ['user_id','nama','alamat','no_wa','slug_rias','harga','gambar'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

// class Fotos extends Model
// {
//     //
//     protected $table = 'foto';
//     protected $fillable = ['harga','gambar'];
// }

// class Venues extends Model
// {
//     //
//     protected $table = 'venue';
//     protected $fillable = ['harga','gambar'];
// }

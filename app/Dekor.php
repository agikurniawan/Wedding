<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dekor;
use App\User;

class Dekor extends Model
{
    //
    protected $table = 'dekorasi';
    protected $fillable = ['user_id','nama','alamat','no_wa','slug_dekor','harga','gambar'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

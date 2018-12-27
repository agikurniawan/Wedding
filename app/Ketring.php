<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ketring;
use App\User;

class Ketring extends Model
{
    //
    protected $table = 'ketring';
    protected $fillable = ['user_id','nama','alamat','slug_ketring','harga','gambar'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

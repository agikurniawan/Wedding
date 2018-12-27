<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Venue;
use App\User;

class Venue extends Model
{
    //
    protected $table = 'venue';
    protected $fillable = ['user_id','nama','alamat','no_wa','slug_venue','harga','gambar'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

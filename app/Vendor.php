<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vendor;

class Vendor extends Model
{
    //
    protected $table = 'vendor';
    protected $fillable = ['nama','alamat','email','telepon','jasa','gambar'];
}

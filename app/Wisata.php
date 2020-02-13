<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = ['title','content','status','slug','file','nama_penyedia','telepon_penyedia','email_penyedia','kategori_wisata'];
}

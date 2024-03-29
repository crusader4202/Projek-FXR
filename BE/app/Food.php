<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    public function category(){
        return $this->belongsTo('App\Category');
    }

    protected $fillable = ['nama', 'desc', 'harga', 'gambar', 'category_id'];
}

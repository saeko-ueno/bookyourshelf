<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['image_url','author','title','comment','recommend','tradable','user_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

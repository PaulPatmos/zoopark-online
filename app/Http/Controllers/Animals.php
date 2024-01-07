<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $fillable = ['name', 'category', 'age', 'description', 'path_img'];

   public function orders(){
      return $this->hasMany(Animans::class);
   }

}

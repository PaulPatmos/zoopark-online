<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
   protected $fillable = ['name', 'value', 'category', 'age', 'description', 'path_img'];
  

}

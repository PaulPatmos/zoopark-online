<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnimalRequest;
use App\Http\Controllers\Controller;
use App\Models\Models\AdminAnimal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
  public function Submit(AnimalRequest $req)
  {
    $body = $req->category;
    return DB::table('animals')->insert([
          'name' => $data,
          'category' =>$data,
          'age' =>$data,
          'description' =>$data,
          'path_img' =>$data,
         ]);

  }
}

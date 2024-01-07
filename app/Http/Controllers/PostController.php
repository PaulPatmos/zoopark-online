<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
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

    public function create(AnimalRequest $req)
    {
      $body = $req->category;
      return view('/', compact('animals'));
  
    }

    public function store() {
      return view( view: 'create');
      
  }
}

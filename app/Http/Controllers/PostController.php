<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function Submit(AnimalRequest $req)
    {
      // $body = $req->category;
      // return DB::table('animals')->insert([
      //       'name' => $body,
      //       'category' =>$body,
      //       'age' =>$body,
      //       'description' =>$body,
      //       'path_img' =>$body,
      //      ]);


      $data = [
        'name' => request('name'),
        'category' => request('category'),
        'age' => request('age'),
        'description' => request('description'),
        'path_img' => request('path_img'),
    ];
    return DB::table('animals')->insert($data);
  
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

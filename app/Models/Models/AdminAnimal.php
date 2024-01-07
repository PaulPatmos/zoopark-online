<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAnimal extends Model
{
    // protected $fillable = ['name', 'value', 'category', 'age', 'description', 'path_img'];
    protected $guarded = false;

    public function create()
    {
      return view('animals.create');
    }
    
    public function store(Request $request)
    {
        
       // Валидация данных
       $validatedData = $request->validate([
          'name' => 'required',
          'category' => 'required',
          'age' => 'required',
          'description' => 'required',
          'path_img' => 'required',
       ]);
    
       // Сохранение данных в базу данных
       DB::table('animals')->insert([
        'name' => $data['name'],
        'category' =>$data['category'],
        'age' =>$data['age'],
        'description' =>$data['description'],
        'path_img' =>$data['path_img'],
       ]);
     
       return back()->with('success', 'Получилось!');
    }

}

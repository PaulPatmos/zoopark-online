<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Animals;
use App\Http\Requests\AnimalRequest;


class MainController extends Controller
{
    public function index() {
        $animals = Animals::get();
        $creatures = Animals::get();
        
        return view('park', compact('animals', 'creatures'));
        return view('post', compact('animals', 'creatures'));
        

    }
    public function about() {
        return view( view: 'about');
        
    }
    public function animal($id) {

        $animal = Animals::where('id', $id)->first();
        return view('animal', compact('animal'));
         
    }

    public function destroyAnimal($animal) {

        Animals::where('id', $animal)->delete();

        return redirect('/park');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function create(AnimalRequest $request)
    {


        return view( view: 'park');
    }
    
    public function store(AnimalRequest $request)
    {
        // $params = $request->all();
       
        // Animals::create($params);
        // return redirect()->route('park');
        // return view( view: 'park');
        $data = $request->all();
        Product::create($data);
        return redirect('/');

    }

    public function edit(Animals $creatures){
        return view('park', compact('animals', 'creatures'));
    }

    
}

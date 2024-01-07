<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class IndexController extends Controller
{
    public function index()
    {
        return view('news.index');
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $filename    = $data['image']->getClientOriginalName();

        //Сохраняем оригинальную картинку
        $data['image']->move(Storage::path('/public/image/').'origin/',$filename);

        //Создаем миниатюру изображения и сохраняем ее
        $thumbnail = Image::make(Storage::path('/public/image/').'origin/'.$filename);
        $thumbnail->fit(300, 300);
        $thumbnail->save(Storage::path('/public/image/').'thumbnail/'.$filename);

        //Сохраняем новость в БД
        $data['image'] = $filename;
        News::create($data);

        return redirect()->route('news.index');
    }
}

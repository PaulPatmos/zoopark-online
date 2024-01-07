@extends('layouts.app')

@section('content')

@endsection

<!-- {{ 
    dump($creatures);
}} -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Виртуальный зоопарк</title>
</head>
<body >
  <!-- Навигационная панель -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img width="90" height="90" src="https://i.pinimg.com/originals/05/05/d9/0505d9de67622ef94f3890280d66eb71.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Главная</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="about">О нас</a>
        </li>
      </ul>


    </div>
  </div>
</nav>
<!-- Конец панели -->

<div class="container">
    <div class="col-8">
        <h1>Животные зоопарка</h1>
 
    </div>
</div>

<!-- Форма добавления животных -->
@auth
<hr>
<div class="container">
    <div class="col-8">
        <h2>Добавить животное</h2>
        <form action="{{ route('post') }}" method="POST">
        @csrf
            <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>
            <div class="col-md-6"><input class="form-control" type="text" value="{{ old('name') }}" id="name" name="name"></div>
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Категория') }}</label>
            <div class="col-md-6"><input class="form-control" type="text" value="{{ old('category') }}" id="category" name="category"></div>
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Возраст') }}</label>
            <div class="col-md-6"><input class="form-control" type="text" value="{{ old('age') }}"  id="age" name="age"></div>
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Описание') }}</label>
            <div class="col-md-6"><textarea class="form-control" value="{{ old('description') }}" id="description" name="description"></textarea></div>
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Фото') }}</label>
            <div class="col-md-6"><input class="form-control" type="text" value="{{ old('path_img') }}" id="path_img" name="path_img"></div>

            </div>
            <br>
            <button class="btn btn-primary" role="button" type="submit">Save</button>
        </form>
    </div>
</div>
<hr>

@else
<div class="container">
    <div class="col-8">
    <hr>
        <h4>Вы не авторизованы и не можете редактировать контент</h4>
        <p class="card-text">Войдите или зарегистрируйтесь</p>
        <hr>
    </div>
</div>
@endauth

<!-- Карточки с животными -->

<div class="container">
<div class="row">
@foreach($animals as $animal)
@include('main', compact('animal'))
@endforeach
</div>
</div>
<!-- Карточки с животными конец -->
</body>
</html>
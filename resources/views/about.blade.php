@extends('layouts.app')

@section('content')

@endsection


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

<hr>
<div class="container-fluid">
<div class="text-center"><p>
Это простое веб-приложение <b>"Виртуальный зоопарк" </b>.
<br>
Здесь пользователи могут просматривать животных, добавлять новых животных и удалять существующих, но для изменения контента нужно авторизоваться.
</p></div>
<hr>
<img class="w-50 p-3 rounded mx-auto d-block" src="https://celes.club/uploads/posts/2021-12/1639549779_90-celes-club-p-muskusnaya-krisa-grizuni-krasivo-foto-93.jpg" alt="Ондатра">
<hr>
</div>
</body>
</html>
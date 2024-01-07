<!-- Карточка шаблон -->



<div class="card col-8" style="width: 18rem;">
<img style="width: 90%;" src="{{ $animal->path_img }}" class="rounded mx-auto d-block" alt="фото">
  <div class="card-body">
  <h3>{{ $animal->name }}</h3> 

  <p class="card-text">Вид: {{ $animal->category }}</p>
  <p class="card-text">Возраст: {{ $animal->age }}</p>
    <a href="{{ route('animall', [$animal->id]) }}" class="btn btn-primary">Смотреть</a>
  </div>
</div>

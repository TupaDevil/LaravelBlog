<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

<body>
    <header>
        <div class=""></div>
        <div class="header" style="background-color: white;" >
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <h1><a class="navbar-brand nav-link" href="#">Ваш блог дот ком</a></h1>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse me-auto" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                      <a class="nav-link me-4" href="{{ route('friend.index')}}">Main</a>
                      <a class="nav-link me-4" href="{{ route('friend.create')}}">Create</a>
                      <a class="nav-link me-4" href="{{ route('friend.store')}}">Store</a>
                      <a class="nav-link me-4" href="#">Спорт</a>
                      <a class="nav-link me-4" href="#">Путешествия</a>
                      <a class="nav-link me-4" href="#">Подписка</a>
                    </div>
                    <div class="navbar-nav">
                        <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                      </div>
                  </div>
                </div>
              </nav>
    </header>
    @yield('content')
</body>
</html>


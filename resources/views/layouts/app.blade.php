<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env("APP_NAME")}} - @yield('page-name')</title>
      <!-- Styles -->
  @vite('resources/js/app.js')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href=" {{ route('homepage') }} ">{{ env("APP_NAME")}}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <a class="nav-link" href=" {{ route('books') }} ">Books</a>
                  </li></ul>
              </div>
            </div>
          </nav>
    </header>
<main>
    <div class="container">
        <h3>@yield('page-name')</h3>
    </div>
</main>
</body>
</html>
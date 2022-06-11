<!-- resources/views/components/layout.blade.php -->
 
<html>
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Amerta Web' }}</title>
        <link href="{!! asset('/css/app.css') !!}" rel="stylesheet" >
    </head>
    <body>
        <main>

 
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container">
                    <a class="navbar-brand " href="{{route('site.index')}}">
                        <img src="{{asset('/img/logo_amerta.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        <span class="align-middle text-white">Amerta</span>
                      </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="{{route('site.index')}}">Home</a>
                      </li>
                      <li class="nav-item me-4">
                        <a class="nav-link" href="#about">About</a>
                      </li>
                      <li class="nav-item me-4">
                        <a class="nav-link" href="#service">Services</a>
                      </li>
                      <li class="nav-item me-4">
                        <a class="nav-link" href="#gallery">Gallery</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <div class="">
                  <div class="title_heading">
                      <h1>Amerta Boutique</h1>
                      <p>Let's Make Your Fashion <span>Better</span></p>
                     <a href="#explore"><button type="button" class="button-head btn btn-outline-light btn-lg text-black">Explore Now</button></a> 
                  </div>
              </div>
        </header>
        {{ $slot }}
        <footer class="footer">
            <p>&copy;Akademi Manajemen Informatika. AMIK Serang, Develop by Belinda Eka Mulyana</p>
        </footer>
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmMax</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <style>

    </style>
  </head>
  <body>    
    {{-- @include('partials.navbar') --}}

    <style>
      html{
        text-decoration: none;
      }

      body{
        /* background-color: #000000; */
        /* color: #ffffff; */
      }
      
      header{
        position: fixed;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 2rem 0;
        background-color: #000000;
      }
      
      nav{

      }
      
    </style>

    <header>
      <div class="logo">
        <h3 style="color: white">Film<span style="#D4AF37">Max</span></h3>
      </div>
      <div class="search">
        
      </div>
      <nav>
        <a href="/">Home</a>
        <a href="/genre">Genre</a>
        <a href="/wishlist">Wishlist</a>
      </nav>
    </header>
    

    <div class="container mt-4">
        @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
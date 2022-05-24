<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewprot" content="width=device=width, initial-scale=1.0" />
    <title>Bekasin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <link rel ="stylesheet" href="HalamanUtama.css"/>
  </head>
  <body>
    @include('partials.navbar')
    <div class="container mt-4">
      @yield('container')
    </div>      
  </body>
</html>
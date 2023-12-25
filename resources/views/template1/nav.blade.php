<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>web</title>

    <link rel="stylesheet" href="normalize.css" />
    
    <link rel="stylesheet" href="all.min.css" />

    <link rel="stylesheet" href="{{asset('assets/css/kasper.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
  </head>
  <body>
   
    <header>
      <div class="container">
        <a href="#" class="logo">
          <img decoding="async" src="{{asset('assets/image/logo.jpg')}}" alt="Logo" />
        </a>
        <nav>
          <i class="fas fa-bars toggle-menu"></i>
          <ul>
            <li><a class="active" href="#">Home</a></li>
            
            <li><a href="/productStore">product</a></li>

            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
          <div class="form">
            
            <i class="btn btn-primary" type="submit">
              <svg width="20" height="20" class="Search" viewBox="0 0 20 20"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></i>
          </div>
        </nav>
      </div>
    </header>
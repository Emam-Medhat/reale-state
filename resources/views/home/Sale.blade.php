<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
    <link rel="stylesheet" href="{{asset('assets/css/Sale.css')}}">
</head>
<body>
@include('home.navbar')

    <div class="scene">
        <div class="gallery" style="--total: 7">
          <div class="image" style="--i: 1">
            <img src="img/about-banner-1.png" alt="image">
          </div>
          <div class="image" style="--i: 2">
            <img src="img/h15.png" alt="image">
          </div>
          <div class="image" style="--i: 3">
            <img src="img/h5.png" alt="image">
          </div>
          <div class="image" style="--i: 4">
            <img src="img/h2.png" alt="image">
          </div>
          <div class="image" style="--i: 5">
            <img src="img/v9.png" alt="image">
          </div>
          <div class="image" style="--i: 6">
            <img src="img/v1.png" alt="image">
          </div>
          <div class="image" style="--i: 7">
            <img src="img/v15.png" alt="image">
          </div>
        </div>
      </div>

    <header>
        <div class="logo">Sale</div>
        <nav>
            <ul>
                <li><a href="{{url('house')}}"><img src="img/o15.png" alt="House" class="property-icon"> House</a></li>
                <li><a href="{{url('villas')}}"><img src="img/v15.png" alt="Villa" class="property-icon"> Villas</a></li>
                <li><a href="{{url('Lands')}}"><img src="img/l7.png" alt="Land" class="property-icon"> Lands</a></li>
            </ul>
        </nav>
    </header>

    <script src="Sale.js"></script>
</body>
</html>
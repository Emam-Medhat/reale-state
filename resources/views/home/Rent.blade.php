<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
    <link rel="stylesheet" href="{{asset('assets/css/Rent.css')}}">
</head>
<body>
@include('home.navbar')

    <div class="scene">
        <div class="gallery" style="--total: 7">
          <div class="image" style="--i: 1">
            <img src="img/s10.png" alt="image">
          </div>
          <div class="image" style="--i: 2">
            <img src="img/s5.png" alt="image">
          </div>
          <div class="image" style="--i: 3">
            <img src="img/s11.png" alt="image">
          </div>
          <div class="image" style="--i: 4">
            <img src="img/s8.png" alt="image">
          </div>
          <div class="image" style="--i: 5">
            <img src="img/v3.png" alt="image">
          </div>
          <div class="image" style="--i: 6">
            <img src="img/v6.png" alt="image">
          </div>
          <div class="image" style="--i: 7">
            <img src="img/v16.png" alt="image">
          </div>
        </div>
      </div>

    <header>
        <div class="logo">Rent</div>
        <nav>
            <ul>
                <li><a href="ho.html"><img src="img/o11.png" alt="House" class="property-icon"> House</a></li>
                <li><a href="vi.html"><img src="img/v8.png" alt="Villa" class="property-icon"> Villas</a></li>
                <li><a href="Lan.html"><img src="img/l5.png" alt="Land" class="property-icon"> Lands</a></li>
            </ul>
        </nav>
    </header>

    <script src="Rent.js"></script>
</body>
</html>
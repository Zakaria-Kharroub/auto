<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>

    @include('layouts.navbar')


    	<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide d-none d-md-flex" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{asset('images/img-carousel-3.png')}}" class="d-block w-100 "  alt="...">
          <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
              <h5>car title</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-primary mt-3" href="#" >voir plus</a></p>
          </div>
      </div>


      <div class="carousel-item">
        <img src="{{asset('images/img-carousel-1.png')}}" class="d-block w-100 " alt="...">
        <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
              <h5>car title</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-danger mt-3" href="#" >voir plus</a></p>
          </div>
      </div>


      <div class="carousel-item">
        <img src="{{asset('images/img-carousel-2.png')}}" class="d-block w-100 " alt="...">
        <div class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
              <h5>car title</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-primary mt-3" href="#" >voir plus</a></p>
        </div>
      </div>

    </div>



    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->







<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>
</html>

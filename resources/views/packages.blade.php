<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css')}} "/>
    <!--Bootstrap Link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap Link-->


    <!--Font Awesome Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Font Awesome Cdn-->

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <!--Google Font-->
   
</head>
<body>
    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href=" " id="logo"><span>T</span>ravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="booking">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
     <!-- Navbar End-->
  

     <!--package start-->

    <selection  class="packages" id="packages">
      <div class="container">
        <div class="main-txt">
          <h1><span>P</span>ackages</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
          


@csrf
@foreach ($pack as $item)
    <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="{{ asset('photo/' . $item->photo) }}" alt="" height="230px">
          <div class="card-body">
                <h3>{{$item->name}}</h3>  
                <p>{{$item->desc}}</p>
                <h6> Price: <strong>{{$item->price}}</strong></h6>
                <a href="booking"> Book Now </a>
            </div>
        </div>
    </div>
@endforeach

          
          
        </div>
      </div>
    </selection>

      <!--package end-->







     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
     <!--footer start-->
    
<footer id="footer">
    <h1><span>T</span>ravel</h1>
    <p>Offering memorable and unique travel experiences</p>
    <div class="social-links">
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-youtube"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-pinterest-p"></i>
  </div>
  <div class="credit">
    <p> Designed By <a href="#">Travel private limited</a></p>
  </div>
  <div class="copyright"></div>
  <p>&copy;Copyright Travel private limited. All Rights Reserved.</p>
  <p>contact-9865544679<p>
  </footer>
  <!--footer End-->







    
</body>
</html>
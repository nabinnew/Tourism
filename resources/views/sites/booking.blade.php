<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
    <!-- Include SweetAlert CSS and JS -->


</head>
<body>
     <!-- Navbar Start-->
     <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="" id="logo"><span>T</span>ravel</a>
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
              <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
     <!-- Navbar End-->


      <!--Section Book Start-->
<section class="book" id="book">
    <div class="container">
        <div class="main-text">
            <h1><span>B</span>ooking</h1>
        </div>
        <div class="row">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                  <img id="destination-image" src="{{ asset('photo/default.png') }}" alt="Destination Image" height="230px">
                    


                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0">
                <form action="add_customer/" method="POST">
                  @csrf

                  <select id="destination" name="destination" class="form-control" required>
                    <option value="" disabled selected>Select Your Destination</option>
                    @foreach($pack as $destination)
                        <option value="{{ $destination->name }}" data-image="{{ asset('photo/' . $destination->photo) }}">
                            {{ $destination->name }}
                        </option>
                    @endforeach
                </select>


<input type="text" class="form-control" placeholder="Number Of People" name="total" required><br>
                    <input type="text" class="form-control" placeholder="Contact Number" name="phone" required><br>
                    <input type="date" id="arrival-date" class="form-control" name="date" required><br>
                    <input type="text" class="form-control" placeholder="Your Name" name="name" required><br>
                    <input type="submit" value="Book Now" class="submit" required>
                </form>
            </div>
        </div>
    </div>
 </section>
 <script>
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('arrival-date').setAttribute('min', today);
</script>

 <!--Section Book End-->







     
     
     
     

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif
  <script>
    document.getElementById('destination').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const imageUrl = selectedOption.getAttribute('data-image');
        const imageElement = document.getElementById('destination-image');

       
        imageElement.src = imageUrl || '{{ asset('photo/default.png') }}'; 
    });
</script>

</body>
</html>
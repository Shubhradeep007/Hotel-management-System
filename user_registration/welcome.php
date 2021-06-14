<?php
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true) {
    header("location: login.php");
    exit;
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome <?php echo $_SESSION['username'] ?></title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      .card{margin: 10px;}
      .row{margin-left: 166px; margin-top: 50px; margin-bottom: 0; margin-right: 0%;}
      body {
      background-image: url("..Delux/images/95bwDJ.jpg");
      background-color: black ;
      color: white;
      font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="./show-booking.html">Know your booking</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Logut</a>
      </li>
      <li class="nav-item dropdown">
 
</nav>
    <div class="container " style="margin: 30px 0 0 165px;">
 <h2>Welcome <?php echo $_SESSION['username'] ?></h2>
  <p>Here you can book rooms what ever you want!</p>
  </div>
  
    <div class="container row ">
    <div class="card " style="width: 18rem;">
    <img class="card-img-top" src="../Delux/images/95bwDJ.jpg" alt="Card image cap">
    <div class="card-body bg-dark">
    <h5 class="card-title">Super Delux</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="./search/super-delux.php" class="btn btn-primary">Book</a>
  </div>
</div>
    
<div class="card " style="width: 18rem;">
  <img class="card-img-top" src="../Delux/images/bg-1.jpg" alt="Card image cap">
  <div class="card-body bg-dark">
    <h5 class="card-title">Delux</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="./search/Delux_serach.php" class="btn btn-primary">Book </a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../Delux/images/6498.jpg" alt="Card image cap">
  <div class="card-body bg-dark">
    <h5 class="card-title">Semi Delux</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="./search/semi-delux-serach.php" class="btn btn-primary">Book</a>
  </div>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
<!-- <img src="images/bg-1.jpg" class="img" alt="" srcset=""> -->
<br><br><br><br>
<div class="container up-con " style="text-align: center;">
    <form action="" name="form" method="POST">
    <div class=" col-lg-6 col-md-3 my-2 tt">
        <h2><label for="datetime-local">Aproching Date</label></h2>
        <input type="date" name="app_dt" class="form-control" id="datetime-local" >
    </div>
	<div class="col-lg-6 col-md-3 my-2 tt">
        <h2><label for="datetime-local">Leaving Date</label></h2>
    <input type="date" name="app_dt1"  class="form-control"  id="datetime-local" >
    </div>

    <div class="col-lg-4 col-md-3">
        <h2>Room-type <br><select name="room_type" class="btn btn-primary my-2">
        <option>Delux</option>
     </h2>
        </select>
    </div>
      


	<button name="submit"type="submit" class="btn btn-dark" >PRICE</button>
    </form>
    <div class="container">
    <h2>Know your price: </h2>
    <?php

if(isset($_POST['submit' ])){

    $app_dt = $_POST['app_dt'];
    $Fd = $_POST['app_dt1'];
    $room_t = $_POST['room_type'];

$datetime1 = new DateTime($app_dt);

$datetime2 = new DateTime($Fd);

$difference = $datetime1->diff($datetime2);

$update = $difference->d; 

//echo $update;



?>


<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    $_SESSION['days'] = $update;
    $_SESSION['app_dt'] = $app_dt;
    $_SESSION['app_dt1'] = $Fd;
  

    include "../db_connection.php";
    $query = "SELECT * FROM `pc` where dates_of= '$update' and rooms_of= '$room_t'";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        ?>
         <h2><label>Price</label>
        <input type="text" class="my-2" value="<?php echo $row['price_of'] ?>rs" disabled></h2>
        <input type="text" value="scroll  Down To Book!" disabled>
   <?php 

    $_SESSION['Price'] = $row['price_of'];

    ?>


<?php    }
} 
	?>

</div>
</div>

<div class="container do-con">
<form action="../rooms/d-room.php" name="lol" method="POST">
    
    <button type="submit" class="btn btn-primary book" class="my-2" name="redirect" style="margin-top: 100px;"> Go to booking Page </button>
</form>



</div>

</body>
</html>
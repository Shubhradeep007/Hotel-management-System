<?php session_start();
    include"../db_connection.php";
    //require "./login.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know Your Booking</title>
    <style>
        .navbar a{
            /* margin-right: 100px; */
            margin-left: 50px  ;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">Treenayani</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../welcome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
    </ul>
  </div>
</nav>






<div class="container">
<form action="" method="post">
<div class="col-lg-4 col-md-3 ">
<h2><label for="validation" class="my-2">Know your BOOKING:</label></h2>
     <input type="text" class="form-control" id="name" name="email" value="<?php echo $_SESSION['email']; ?>" >
</div>
<button class="btn btn-primary" name="submit" type="submit">Click Here Want Check</button>
</form>
<div class="container my-2">
    <?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $query = "SELECT * FROM `super` where email = '$email' ";
    $query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) 
{
    while($row = mysqli_fetch_array($query_run))
    {
       //echo $row['fname'];
      // echo $row['order_id'];
       $id = $row['order_id'];
       $_SESSION['id'] = $id;
       $sql = "SELECT * FROM SUPER u INNER JOIN payment_details pd ON u.order_id = pd.order_id WHERE '$_SESSION[id]' = pd.order_id ";
        $query_run = mysqli_query($conn,$sql);
        if (mysqli_num_rows($query_run) > 0) 
            {
            while($row = mysqli_fetch_array($query_run))
                { ?>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Price</th>
      <th scope="col">Check-in Date</th>
      <th scope="col">Check-out Date</th>
      <th scope="col">Days Stay</th>
      <th scope="col">Room type</th>
      <th scope="col">Room no</th>
      <th scope="col">Beds</th>
      <th scope="col">Adults</th>
      <th scope="col">Childs</th>
      <th scope="col">Payment status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $row['fname'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['Price'] ?></td>
      <td><?php echo $row['approching-date'] ?></td>
      <td><?php echo $row['leaving-date'] ?></td>
      <td><?php echo $row['Days-stay'] ?></td>
      <td><?php echo $row['room-type'] ?></td>
      <td><?php echo $row['rooms'] ?></td>
      <td><?php echo $row['Beds'] ?></td>
      
      <td><?php echo $row['Adults'] ?></td>
      <td><?php echo $row['Childs'] ?></td>
      <td><?php echo $row['dis_st'] ?></td>
      
      
    </tr>
    
  </tbody>
</table>
<small>If you does not see anything on this payment status then you have to rebook and Enjoy! For other help you can contact us. </small>                   
                    

                <?php }
            }

    }
             
}
         
}
    ?>


</div>





<script>
    document.getElementById('name').hidden = true;
</script>
</body>
</html>
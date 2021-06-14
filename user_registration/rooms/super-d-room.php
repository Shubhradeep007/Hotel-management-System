<?php 
    
    include("../db_connection.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{font-family:'Poppins', sans-serif; }
</style>
</head>
<body>
<div class="conatiner row">
<div class="container" style="text-align: center;">
<h1>Book</h1>
<h1>Super Delux Rooms</h1>


</div><br><br><br><br><br>
<div class="row">
            <?php
                
                $query = "select * from `super`";
                $query_run = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["rooms"]?></div>
                        <img class="card-img-top" src="../images/95bwDJ.jpg" alt="Card image cap">
                        <div class="card-body">

                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="./super-d-input.php?rn=<?php echo $row['rooms'] . "&rt=delux";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
               } ?>
           
        </div><br><br>
      



</div>
</body>
</html>
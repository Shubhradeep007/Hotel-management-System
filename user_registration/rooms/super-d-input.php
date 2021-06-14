<?php session_start();

   



?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{font-family:'Poppins', sans-serif; }
</style>
</head>
<body>
    <form action="./super-d-upload.php" method="post" name="form" enctype="multipart/form-data" >
        <div class="container row col-lg-12 ">
        <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Room No:</label></h2>
            <input type="text" class="form-control" name="room_no" value="<?php echo $_GET['rn'];
           $_SESSION['rn'] = $_GET['rn']?>" disabled>
        </div>
        <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Room type:</label></h2>
            <input type="text" class="form-control"  name="rt" value="<?php if($_GET['rt'] == 'delux'){echo 'Delux';}if($_GET['rt'] == 'semi-delux'){echo 'Semi Delux';}if($_GET['rt'] == 'Sd'){echo 'Super Delux';}
            $_SESSION['rm'] = $_GET['rt'];?>" disabled>
        </div>
            <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Price:</label></h2>
            <input type="text" class="form-control" name="price" value="<?php echo $_SESSION['Price'] ?>" disabled>
        </div>
        <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Full Name:</label></h2>
            <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['username']; ?>" >
        </div>
        <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Approching Date:</label></h2>
            <input type="text" class="form-control" name="app_dt" value="<?php echo $_SESSION['app_dt']; ?>" disabled>
        </div>
        <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Leaving Date:</label></h2>
            <input type="text" class="form-control" name="le_dt" value="<?php echo $_SESSION['app_dt1']; ?>" disabled>
        </div>
        <div class="col-lg-4 col-md-3 ">
            <h2><label for="validation" class="my-2">Days Stay:</label></h2>
            <input type="text" class="form-control" name="days_S" value="<?php echo $_SESSION['days']; ?>" disabled>
        </div>
        
        <div class="col-lg-4 col-md-3">
        <h2><label for="validation" class="my-2">Phone No:</label></h2>
            <input type="number" class="form-control" name="PhoneNo" required>
        </div>
        <div class="col-lg-4 col-md-3">
        <h2><label for="validation" class="my-2">Email:</label></h2>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="col-lg-4 col-md-3">
        <h2><label for="validation" class="my-2">Address:</label></h2>
            <input type="text" class="form-control" name="Address" required>
        </div>
       
        <div class="col-lg-4 col-md-3">
            <h2><label for="validation" class="my-2">Adhar Card No:</label></h2>
            <input type="number" class="form-control" name="AdharNo" required>
        </div><br>
  
        <div class="col-lg-4 col-md-3">
        <h2>Choose Your Gender: <br><select name="gender" class="btn btn-primary my-2">
        <option>Male</option>
        <option>Female</option>
        <option>others</option>
        </h2>
        </select>
        </div>
        <div class="col-lg-4 col-md-3">
        <h2>No of Adults: <br><select name="Adults" class="btn btn-primary my-2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        

        </h2>
        </select>
        </div>
        <div class="col-lg-4 col-md-3">
        <h2>No of Childs: <br><select name="childs" class="btn btn-primary my-2">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        

        </h2>
        </select>
        </div>
        
        <div class="col-lg-4 col-md-3">
        <h2>No of Beds: <br><select name="beds" class="btn btn-primary my-2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        

        </h2>
        </select>
        </div>
        
        <td><input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php $order =   "ORDS" . rand(10000,99999999); $_SESSION['order'] = $order?>">

        
            <div class="container my-2">
            <?php
                if (isset($_GET['error'])) {
                    echo "<h1>". $_GET['error']."</h1>";
                }
    
    
    ?>
            <label class="form-label" for="customFile">Front Page:</label>
            <input type="file" class="form-control" name="my_image1" id="customFile"  multiple accept="image/*"/>
            <label class="form-label" for="customFile">Back Page:</label>
            <input type="file" class="form-control" name="my_image2" id="customFile"  multiple accept="image/*" />
            
            </div>
            <div class="btn" style="float: right;">
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
            </div>
        </div>
           
            
          
    </form>

 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="user.js"></script>
</body>
</html>
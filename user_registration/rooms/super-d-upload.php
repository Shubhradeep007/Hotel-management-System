<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
   session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<style>
body{
    background-image: url(../images/95bwDJ.jpg);
    display: flex;
    text-align: center;
    align-items: center;
    flex-direction: column;
    
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<h1 style="color: white;">Merchant Check Out Page</h1>
	
	<form method="post" action="../pgRedirect.php">
<div class="container row" style="margin: 0px 20px ;">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Order Recap</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Name: <?php echo strtoupper($_SESSION['fname']);?><br>
    Approching-Date: <?php echo $_SESSION['app_dt']?><br>
    Leaving-Date: <?php echo $_SESSION['app_dt1']?><br>
    Days-stay: <?php echo $_SESSION['days']?><br>
    Room number: <?php echo $_SESSION['rn']?><br>
    Room Type: <?php echo strtoupper($_SESSION['rm']);?><br>
    Adults: <?php echo strtoupper($_SESSION['adults']);?><br>
    Childs: <?php echo strtoupper($_SESSION['childs']);?><br>
    Beds: <?php echo strtoupper($_SESSION['beds']);?><br>
    Amount: <?php echo "$_SESSION[Price]"?>
</p>
    <button class="btn btn-danger" type="submit">Proceed to Pay</button>
    </div>
    </div>
		<!-- <table border="1" style="margin: 0 20px;"> -->
			
				
				
					<!-- <td><label>ORDER_ID::*</label></td> -->
					<td><input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo $_SESSION['order']?>">
				
				
				
					
					<!-- <td><label>CUSTID ::*</label></td> -->
					<td><input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
			
				
					<!-- <label>INDUSTRY_TYPE_ID ::*</label> -->
					<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" type="hidden"> 
				
					<!-- <td><label>Channel ::*</label></td> -->
					<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" type="hidden">
			
					
					<td><input title="TXN_AMOUNT" tabindex="10"
						id="myText"type="text" name="TXN_AMOUNT" 
						value="<?php echo "$_SESSION[Price]"?>">
					
				
				
					<!-- <td><input value="CheckOut" type="submit"	onclick=""></td> -->
				<!-- </tr> -->
			<!-- </tbody> -->
		<!-- </table> -->
		<!-- * - Mandatory Fields -->
	</form>
    </div>
    <SCript>
	document.getElementById("myText").hidden = true;
    </SCript>
</body>
</html>



<?php
//session_start();
//error_reporting();
if(isset($_POST['submit']) && isset($_FILES['my_image1']) && isset($_FILES['my_image2']))
{
    include"../db_connection.php";
    //$rm =[];
   // echo"<pre>";
    //print_r($_FILES['my_image1']);
    //print_r($_FILES['my_image2']);
    //echo"</pre>";

    $img_name = $_FILES['my_image1']['name'];
    $img_type = $_FILES['my_image1']['type'];
    $tmp_name = $_FILES['my_image1']['tmp_name'];
    $error = $_FILES['my_image1']['error'];
    $img_size = $_FILES['my_image1']['size'];

    
    $img_name1 = $_FILES['my_image2']['name'];
    $img_type1 = $_FILES['my_image2']['type'];
    $tmp_name1 = $_FILES['my_image2']['tmp_name'];
    $error1 = $_FILES['my_image2']['error'];
    $img_size1 = $_FILES['my_image2']['size'];

    $fname = $_POST['fname'];
    $_SESSION['fname'] = $fname;

    $email = $_POST['email'];
    $phoneno = $_POST['PhoneNo'];
    $adharno =$_POST['AdharNo'];
 //   $app_dt = $_POST['app_dt'];
  //  $app_dt1 = $_POST['le_dt'];
    $gender = $_POST['gender'];
//    $days_S = $_POST['days_S'];
//    $price = $_POST['price'];
    $Adults = $_POST['Adults'];
    $_SESSION['adults'] = $Adults;

    $childs = $_POST['childs'];
    $_SESSION['childs'] = $childs;
    
    $beds = $_POST['beds'];
    $_SESSION['beds'] = $beds;

    $Address = $_POST['Address'];
   // $rm  = $_POST['rm'];

    if($error === 0 && $error1 === 0){
        if ($img_size > 1250000 && $img_size1 > 1250000) {
            $em = "Large image it must be <=1mb.";
            header("location: user.php?error=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
            //echo($img_ex);
            $img_ex_lc = strtolower($img_ex);
            $img_ex_lc1 = strtolower($img_ex1);
            $allowed_exs = array("jpg", "png", "jpeg");

            if (in_array($img_ex_lc,$allowed_exs,$img_ex_lc1)) {
                $new_ing_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $new_ing_name1 = uniqid("IMG-", true).'.'.$img_ex_lc1;
                $img_upload_path = 'super-d-pic/'.$new_ing_name;
                $img_upload_path1 = 'super-d-pic/'.$new_ing_name1;

                move_uploaded_file($tmp_name, $img_upload_path);
                move_uploaded_file($tmp_name1, $img_upload_path1);
                
                
                //insert into database 

               // if ($_SESSION['rm'] == 'Delux') {
                $sql = "UPDATE `super` SET `Price`= '$_SESSION[Price]',`order_id`= '$_SESSION[order]',`fname`='$fname',`phone`='$phoneno',`email`='$email',`address`='$Address',`adhar-card-no`='$adharno',`adhar-card-f-1`='$new_ing_name',`adhar-card-s-1`='$new_ing_name1',`approching-date`=' $_SESSION[app_dt]',`leaving-date`='$_SESSION[app_dt1]',`Days-stay`='$_SESSION[days]',`gender`='$gender',`Adults`='$Adults',`Childs`='$childs',`Beds`='$beds',`status`='1'WHERE `rooms` = '$_SESSION[rn]'";
                mysqli_query($conn, $sql);
                //}
            
                //if ($_POST["rm"] == 'Delux') {
                    //$sql = "UPDATE `user` SET `Price`= '$_SESSION[Price]',`fname`='$fname',`phone`='$phoneno',`email`='$email',`adhar-card-no`='$adharno',`adhar-card-f-1`='$new_ing_name',`adhar-card-s-1`='$new_ing_name1',`approching-date`=' $_SESSION[app_dt]',`leaving-date`='$_SESSION[app_dt1]',`Days-stay`='$_SESSION[days]',`gender`='$gender',`Adults`='$Adults',`Childs`='$childs',`Beds`='$beds',`status`='1'WHERE `rooms`=`$_GET[rn]`";
                //}if ($_POST['room'] == 'Semi-delux') {
                    # code...
                   // $row=mysqli_query($conn, $sql);
                //}
  //$sql = "UPDATE INTO `user`(`fname`, `phone`, `email`, `adhar-card-no`, `adhar-card-f-1`, `adhar-card-s-1`, `approching-date`, `recorde-date`, `room-type`,`gender`) 
    //            VALUES ('$fname','$phoneno', '$email',' $adharno','$new_ing_name','$new_ing_name1','$app_dt','',' $roomimg','$gender' ) Where `rooms`=`$_GET[rn]`";
            //mysqli_query($conn, $sql);

            }
            else {
                $em = "File not supported";
                header("location: user.php?error=$em");
            }
        }
    }else{
        $em = "Unknown Error occourd";
        header("location: user.php?error=$em");
    }
}


?>

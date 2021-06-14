<?php 
    include"../db_connection.php";
    if($_GET['rt'] == 'a'){
    	$query = "UPDATE `user` SET `price` = null,`order_id` = null, `fname` = null, `phone` = null, `email` = null,`address` = null,`adhar-card-no` = null,`adhar-card-f-1` = null,`adhar-card-s-1` = null,`approching-date` = null,`leaving-date` = null,`Days-stay` = null,`gender` = null,`Adults` = null,`Childs` = null,`Beds` = null,`status` = 0 WHERE rooms = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "UPDATE `semi` SET `price` = null, `order_id` = null,`fname` = null, `phone` = null, `email` = null,`address` = null,`adhar-card-no` = null,`adhar-card-f-1` = null,`adhar-card-s-1` = null,`approching-date` = null,`leaving-date` = null,`Days-stay` = null,`gender` = null,`Adults` = null,`Childs` = null,`Beds` = null,`status` = 0 WHERE rooms = $_GET[rn]";
    }
    if($_GET['rt'] == 'c'){
    	$query = "UPDATE `super` SET `price` = null, `order_id` = null,`fname` = null, `phone` = null, `email` = null,`address` = null,`adhar-card-no` = null,`adhar-card-f-1` = null,`adhar-card-s-1` = null,`approching-date` = null,`leaving-date` = null,`Days-stay` = null,`gender` = null,`Adults` = null,`Childs` = null,`Beds` = null,`status` = 0 WHERE rooms = $_GET[rn]";
    }
    $query_run = mysqli_query($conn,$query);
    header("location:redirect.php");   
?>
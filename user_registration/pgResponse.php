<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
session_start();
include"./db_connection.php";

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;


$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		
		
		
		//$sql= "UPDATE `user` SET `paymemt` = `succesful` WHERE `rooms` = `102`";
		//$query = "select * from user";
        //$query_run = mysqli_query($conn,$query);
        //while($row = mysqli_fetch_assoc($query_run)){
		//	$_SESSION['payment'] = $row['payment'];
		//	$_SESSION['rooms'] = $row['rooms'];
		//	echo $_SESSION['payment'];
		//	$sql = "UPDATE `user` SET `payment` = `Sucess` ,`status`='1' WHERE `rooms` = '101'";

		
		//echo "<h1>Room Booked Sucessfully</h1>" . "<br/>";
		
		//session_start();
		//include"./upload.php";
		//include"./db_connection.php";
		
		
		
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.

		if (isset($_POST['ORDERID']) && isset($_POST['TXNAMOUNT'])) {
			$order_id = $_POST['ORDERID'];
			//$_SESSION['orderid'] = $order_id;
			$status = $_POST['STATUS'];
			$amount = $_POST['TXNAMOUNT'];
			//$_SESSION['st'] = $status;
			$date = $_POST['TXNDATE'];
		//	$cusid = $_POST['CUST_ID'];
			$sql = "INSERT INTO `payment_details`(`order_id`, `status`, `dis_st`,`amount`, `date` ) VALUES ('$order_id','$status','Success','$amount','$date')";
			//$sql = "UPDATE INTO `user` SET (`payment` = `success`) WHERE (`orderid`='$order_id')";
		}if ($conn -> query($sql) == TRUE) {
			echo"true";
			header ("location: test_fetch2.php");
		}

	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		echo "<b>BOOKING HAS BEEN CANCELD. TRY TO BOOK ANOTHER TIME </b>" . "<br/>";
	}

	//if (isset($_POST) && count($_POST)>0 )
	//{ 
	//	foreach($_POST as $paramName => $paramValue) {
	//			echo "<br/>" . $paramName . " = " . $paramValue;
	//	}
	//}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
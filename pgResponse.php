<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once('dbconnect.php');
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
		// $username=$_GET['username'];
		//  $bookname=$_GET['bookname'];
	$order=$_POST['ORDERID'];
	$status=$_POST["STATUS"];
	// $username=$paramList["CUST_ID"];
		//  $sql="INSERT into books_user values('NULL','$username','$bookname')";
		//  $insert=mysqli_query($conn,$sql);
	$sql="UPDATE `txn` SET `status`='$status'  WHERE `orderid`='$order'";
	$insert=mysqli_query($conn,$sql);

	$bookname=$data['bookname'];
$sql="INSERT into `books_user` values('NULL','$username','$bookname')";
 $insert=mysqli_query($conn,$sql);
 $bill="UPDATE `bill` set `txn_status`='$status' where `orderid`='$order'";
$binsert=mysqli_query($conn,$bill);
	 header ("location:buy.php?orderid=.$orderid");
		// //Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		header('location:books.php');
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ( $text == "" ) {

	// This is the first request. Note how we start the response with CON
	$response  = "CON What would you like to do? \n";
	$response .= "1. Check My Account Number \n";
	$response .= "2. Check My Balance \n";
	$response .= "3. Check My Branch";
} else if ( $text == "1" ) { //print response
  
	// Your business logic to determine the account number goes here
	$accountNumber  = "ACC1001"; 
	// This is a terminal request. Note how we start the response with END
	$response = "END Your account number is $accountNumber";

} else if ( $text == "2" ) {

	// Your business logic to determine the balance goes here
	$balance  = "KES 1,000";
	// This is a terminal request. Note how we start the response with END
	$response = "END Your balance is $balance";

}
 else if ( $text == "3" ) {//Your business logic for branch is $branch="Strathmore";
 //this terminal request
 $response="END Welcome to your branch at $branch;

// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;

// DONE!!!
?>


















?>
<p>hallo</p>

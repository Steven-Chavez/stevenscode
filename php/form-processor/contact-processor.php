<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 12/13/2014
 * Time: 9:07 PM
 */
session_start();
require_once("../../lib/csrf.php");
require_once("Mail.php");

try{
	// verify the form was submitted OK
	if (@isset($_POST["firstName"]) === false || @isset($_POST["lastName"]) === false || @isset($_POST["email"]) === false || @isset($_POST["subject"]) === false || @isset($_POST["contactMsg"]) === false ) {
		throw(new RuntimeException("Form variables incomplete or missing"));
	}

	// verify the CSRF tokens
	if(verifyCsrf($_POST["csrfName"], $_POST["csrfToken"]) === false) {
		throw(new RuntimeException("CSRF tokens incorrect or missing. Make sure cookies are enabled."));
	}

	//trim and sanitize first name
	$firstName = trim($_POST["firstName"]);

	if(filter_var($firstName, FILTER_SANITIZE_STRING) === false) {
		throw(new UnexpectedValueException("First name $firstName is not string"));
	}

	//trim and sanitize last name
	$lastName = trim($_POST["lastName"]);

	if(filter_var($lastName, FILTER_SANITIZE_STRING) === false) {
		throw(new UnexpectedValueException("Last name $lastName is not string"));
	}

	//trim and sanitize subject
	$subject = trim($_POST["subject"]);

	if(filter_var($subject, FILTER_SANITIZE_STRING) === false) {
		throw(new UnexpectedValueException("Last name $subject is not string"));
	}

	//trim and sanitize message
	$msg = trim($_POST["contactMsg"]);

	if(filter_var($msg, FILTER_SANITIZE_STRING) === false) {
		throw(new UnexpectedValueException("Last name $msg is not string"));
	}

	//trim and sanitize email
	$email = trim($_POST["email"]);

	if(filter_var($email, FILTER_SANITIZE_STRING) === false) {
		throw(new UnexpectedValueException("Last name $email is not string"));
	}

	//set up email to send
	$to = "schavez256@yahoo.com";
	$from = $email;

	// build headers
	$headers                 = array();
	$headers["To"]           = $to;
	$headers["From"]         = $from;
	$headers["Reply-To"]      = $from;
	$headers["Subject"]      = $subject;
	$headers["MIME-Version"] = "1.0";
	$headers["Content-Type"] = "text/html; charset=UTF-8";

	// send the email
	error_reporting(E_ALL & ~E_STRICT);
	$mailer =& Mail::factory("sendmail");
	$status = $mailer->send($to, $headers, $msg);
	if(PEAR::isError($status) === true)
	{
		echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send mail message:" . $status->getMessage() . "</div>";
	}
	else
	{
		echo "<div class=\"alert alert-success\" role=\"alert\"><strong>Sign up successful!</strong> Please check your Email to complete the signup process.</div>";
	}

}
catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}
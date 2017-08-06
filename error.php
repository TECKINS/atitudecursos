<?php
$file=fopen("welcome.txt","r");

if(!file_exists("welcome.txt")) {
  die("File not found");
  error_function(error_level,error_message,
error_file,error_line,error_context);
} else {
  $file=fopen("welcome.txt","r");
}

//error handler function
//function customError($errno, $errstr) {
  //echo "<b>Error:</b> [$errno] $errstr";
//}

//set error handler
//set_error_handler("customError");

//trigger error
//echo($test);


/*
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

$test=2;
//trigger error
if ($test>=1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}


//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "santosdesouzacris@gmail.com","From: webmaster@atitudecursos.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}


//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception
checkNum(2);
*/

//create function with an exception
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(2);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}



?>

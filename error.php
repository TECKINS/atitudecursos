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
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error
echo($test);


?>

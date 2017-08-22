<?php
  
  /*$ curl ipinfo.io/8.8.8.8
{
  "ip": "8.8.8.8",
  "hostname": "google-public-dns-a.google.com",
  "loc": "37.385999999999996,-122.0838",
  "org": "AS15169 Google Inc.",
  "city": "Mountain View",
  "region": "CA",
  "country": "US",
  "phone": 650
}
*/


  $ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/8.8.8.8/json"));
echo $details->city; // -> "Mountain View"

 

  
?>

<!DOCTYPE html>
<html>
<head>
<title>IP Location</title>
  <meta charset="utf-8">
  <script>
     $.get("https://ipinfo.io/json", function (response) {
      $("#ip").html("IP: " + response.ip);
      $("#address").html("Location: " + response.city + ", " + response.region);
      $("#details").html(JSON.stringify(response, null, 4));
  }, "jsonp");
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
  
  
<h3>Client side IP geolocation using <a href="http://ipinfo.io">ipinfo.io</a></h3>

<hr/>
<div id="ip"></div>
<div id="address"></div>
<hr/>Full response: <pre id="details"></pre>

</body>
</html>

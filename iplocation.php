<?php
  $.get("https://ipinfo.io/json", function (response) {
      $("#ip").html("IP: " + response.ip);
      $("#address").html("Location: " + response.city + ", " + response.region);
      $("#details").html(JSON.stringify(response, null, 4));
  }, "jsonp");

  
?>

<!DOCTYPE html>
<html>
<head>
<title>IP Location</title>
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

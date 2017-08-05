<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";    

    setcookie("user", "mt_rand();", time() + 3600, '/~cookies/', ".atitudecursos.org", 1);
    
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
    
  // Cria o mesmo cookie acima só que irá durar três dias
    setcookie('usuario', 'Fulano', (time() + (3 * 24 * 3600)));
  
  // set the expiration date to one hour ago
    //setcookie("user", "", time() - 3600);
    
    print_r($_COOKIE);
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

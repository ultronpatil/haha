<?php
// Set a cookie
$cookie_name = "user";
$cookie_value = "John Doe";
$expiration_time = time() + (86400 * 30); // Cookie expiration time, here set to 30 days

setcookie($cookie_name, $cookie_value, $expiration_time, "/");

// Retrieve the cookie value
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    echo "Cookie value: " . $cookie_value;
} else {
    echo "Cookie not set.";
}
?>

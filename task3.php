<?php

echo "<br>";
echo "<form method='post'>";
echo "<lable>username: </lable>";
echo "<input type='text' name='username'>";
// echo "<lable>password: </lable>";
// echo "<input type='password' name='password'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

session_start();

$username = $_POST["username"];
// $password = $_POST["password"];

$_SESSION["username"] = $username;
// $_SESSION["password"] = $password;
print_r($_SESSION);

// session_unset();

// session_destroy();


?>
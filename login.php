<?php
$msg = "";
include 'ens.php';
$user = new ens('Localhost', 'root', '', 'cart_db');
$username = $_POST['username'];
$password = $_POST['password'];

if ($user->exists($username, $password)) {
    $_SESSION['login'] = true;
    header("mem.php");
} else {
    header("index.php?message=".urlencode('incorrect username or password'));
    exit();
}

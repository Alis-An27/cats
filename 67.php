<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$mysqli= new mysqli("localhost","root","","legion");
$result = $mysqli->query("SELECT * FROM `gets` WHERE email='$email' AND password='$password'");
if($result->num_rows){
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['email'] = $row['email'];
}else{
    exit("неправильный логин или пароль");
}
<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mysqli= new mysqli("localhost","root","","legion");
$result = $mysqli->query("SELECT * FROM `gets` WHERE email='$email'");
if($result->num_rows){
    exit("Такой пользователь уже существует");
}else{
    $mysqli->query("INSERT INTO 'gets'('name','lastname','email','password') VALUES('$name','$lastname','$email','$pass')");
    exit("Пользователь $name успешно зарегистрирован");
}
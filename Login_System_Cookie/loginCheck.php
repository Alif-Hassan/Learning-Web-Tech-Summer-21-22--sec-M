<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];


if($username==null || $password == null){

echo "null username/password";
}else {
if($username == "Alif" || $password == "123" ){
    $_SESSION['status']= true ;
    setcookie('status','true',time()+3600,'/');
    header('location:home.php');
}else{
    echo"Invalid User";
}}?>
<?php


$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
    
}else{
    echo "no connection";
}

mysqli_select_db($con, 'youtubeuserdata');

$user  = $_POST['user'];
$password = $_POST['password'];
$login = $_POST['login'];


$query = " insert into userinfodata (user, password,login)
 value ('$user', '$password', '$login')";

 echo "query";
 //mysqli_query($con, $query);


?>
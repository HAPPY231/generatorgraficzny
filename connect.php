<?php
$server_name="localhost";
$user_name="root";
$password="";
$komunikat="połączenie z bazą udane";

if (isset($_POST['wyslij'])){
$dbc= mysqli_connect($server_name,$user_name,$password);
if(!$dbc){
    die("połączenie nieudane");
}else{
    echo "<script type='text/javascript'>alert('$komunikat');</script>";
    include("wpisywanie.php");
}
}
?>
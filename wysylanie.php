<?php 
$zapytanie = $_POST['wynik'];
$server_name="localhost";
$user_name="root";
$password="";

$dbc= mysqli_connect($server_name,$user_name,$password);

isset($_POST['wynik']) ? $_POST['wynik'] : '';

if (isset($_POST['wyslij1'])){

    echo "<script type='text/javascript'>alert('$zapytanie');</script>";

    $sql=mysqli_query($dbc,$zapytanie);
     
}
?>


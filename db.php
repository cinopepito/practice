<?php
$connection = mysqli_connect('localhost','root','','maliste');
if(!$connection){
    die('connection failed'.mysqli_error());
}
echo'connexion reussie';
?>
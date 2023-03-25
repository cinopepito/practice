<?php
function createData(){
    global $connection;
    $username = $_POST['username'];
    $age = $_POST['age'];
    $query = "INSERT INTO users (username,age) VALUES('$username','$age')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die('query failed'.mysqli_error());
    }
}
function showData(){
    global $connection;

    $query = "SELECT * FROM users";

$result = mysqli_query($connection,$query);
    
if(!$result){
    die('query failed'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
} 
}

?>
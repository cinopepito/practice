<?php
include('db.php');
include('function.php');
if(isset($_POST['submit'])){
    createData();
}
?>
<form action="login_create.php" method='post'>
    Name: <input type="text" name='username'><br>
    Age: <input type="age" name='age'><br>
    <input type="submit" name='submit'>
</form>
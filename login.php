<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $age = $_POST['age'];
    echo $username . '<br>';
    echo $age;
}
?>
<form action="login.php" method='post'>
    Name: <input type="text" name='username'><br>
    Age: <input type="age" name='age'><br>
    <input type="submit" name='submit'>
</form>
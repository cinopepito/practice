<?php
include('db.php');
include('function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>READ DATA</h1>
<form action="login_read.php" method='post'>
    
    <?php
showData();
    ?>
    </select>

    <input type="submit" name='submit'>
</form>
</body>
</html>

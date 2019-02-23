<?php
session_start();

$username = $_POST['username'];

// echo $username;
$_SESSION['uName'] = $username;

?>

<form action="session1.php" method="post">
       UserName: <input type="text" name="username">
       <input type="submit" value="OK">
    </form>
<?php
    $host = 'localhost';
    $user = 'root';
    $pwd = '12345678';
    $dbName = 'webboard';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);
        // echo "Connect success !!";
        

        // // foreach($dbh->query('') as $row) {
        // //     print_r($row);
        // // }
        // $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
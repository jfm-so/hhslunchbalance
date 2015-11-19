<?php
include('balance.php');
include('config.php');
$date = date('Y-m-d');
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO lunch (date, bal)
    VALUES ('$date', '$bal')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
echo $conn;
?>

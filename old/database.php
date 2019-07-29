<?php
$servername = "localhost";
$database = "telkomseliot";
$username = "ahmad";
$password = "warrior";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
    exit(1);
}

function get_post_data($con, $nama){
    if(isset($_GET[$nama]) && $_GET[$nama]!=null){
        return $_GET[$nama];
        // return $con->quote($_GET[$nama]);
    }
    echo "No $nama data is passing";
    exit(1);
}


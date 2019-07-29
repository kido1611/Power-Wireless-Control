<?php
require_once('database.php');

$idMesin = get_post_data($conn, "idmesin");
$idProduk = get_post_data($conn, "idproduk");
$suhu = get_post_data($conn, "suhu");
$arus = get_post_data($conn, "arus");
$kelembapan = get_post_data($conn, "kelembapan");
$rpm = get_post_data($conn, "rpm");
$gas = get_post_data($conn, "gas");
// $tanggal = get_post_data($conn, "tanggal");
$count1 = get_post_data($conn, "count1");
$count2 = get_post_data($conn, "count2");
$count3 = get_post_data($conn, "count3");
$count4 = get_post_data($conn, "count4");
$count5 = get_post_data($conn, "count5");

$sql = "INSERT INTO `telemetri` 
                (`id`, `idMesin`, `idProduk`, `suhu`, `arus`, `kelembapan`, `rpm`, `gas`, `tanggal`, `count1`, `count2`, `count3`, `count4`, `count5`) 
            VALUES 
                (NULL, :idmesin, :idproduk, :suhu, :arus, :kelembapan, :rpm, :gas, NOW(), :count1, :count2, :count3, :count4, :count5)";

try{
    $prep = $conn->prepare($sql);
    $prep->bindParam(':idmesin', $idMesin);
    $prep->bindParam(':idproduk', $idProduk);
    $prep->bindParam(':suhu', $suhu);
    $prep->bindParam(':arus', $arus);
    $prep->bindParam(':kelembapan', $kelembapan);
    $prep->bindParam(':rpm', $rpm);
    $prep->bindParam(':gas', $gas);
    $prep->bindParam(':count1', $count1);
    $prep->bindParam(':count2', $count2);
    $prep->bindParam(':count3', $count3);
    $prep->bindParam(':count4', $count4);
    $prep->bindParam(':count5', $count5);
    $prep->execute();
}
catch(PDOException $e){
    print_r($e);
}

$conn = null;

echo "1";
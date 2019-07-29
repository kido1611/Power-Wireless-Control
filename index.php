<?php
require 'vendor/autoload.php';
require 'config.php';
date_default_timezone_set("Asia/Jakarta");

Flight::route('/(@idmesin:[0-9]+)', function($idmesin = -1){
    $db = Flight::db();
    $sql = "SELECT DISTINCT idmesin from telemetri order by idmesin asc";
    $result = $db->query($sql);
    $listMesin = array();
    while($row = $result->fetch_assoc()){
        array_push($listMesin, $row);
    }
    if($idmesin == null){
        Flight::render('index.php',array(),'body_content');
        Flight::render('base.php', array('mesin' => $listMesin, 'selectedMesin' => $idmesin));
        return;
    }
    $sql = "select * from telemetri where idmesin='$idmesin' order by tanggal desc";
    $result = $db->query($sql);
    if($result->num_rows < 1){
        Flight::render('nomesin.php',array(),'body_content');
        Flight::render('base.php', array('mesin' => $listMesin, 'selectedMesin' => $idmesin));
        return;
    }
    Flight::render('mesin.php',array('dataMesin' => $result->fetch_assoc()), 'body_content');
    Flight::render('base.php', array('mesin' => $listMesin, 'selectedMesin' => $idmesin));
});
Flight::route('POST /api/telemetri', function(){
    $db = Flight::db();
    $request = Flight::request();

    $idMesin = getData($request, "idmesin");
    $idProduk = getData($request, "idproduk");
    $suhu = getData($request, "suhu");
    $arus = getData($request, "arus");
    $kelembapan = getData($request, "kelembapan");
    $rpm = getData($request, "rpm");
    $gas = getData($request, "gas");
    $count1 = getData($request, "count1");
    $count2 = getData($request, "count2");
    $count3 = getData($request, "count3");
    $count4 = getData($request, "count4");
    $count5 = getData($request, "count5");

    $sql = "INSERT INTO `telemetri` (`id`, `idMesin`, `idProduk`, `suhu`, `arus`, `kelembapan`, `rpm`, `gas`, `tanggal`, `count1`, `count2`, `count3`, `count4`, `count5`) VALUES (NULL, '$idMesin', '$idProduk', '$suhu', '$arus', '$kelembapan', '$rpm', '$gas', '".date("Y-m-d H:i:s")."', '$count1', '$count2', '$count3', '$count4', '$count5')";
    $result = $db->query($sql);

    Flight::json(
        array(
            'success' => $result==true?1:0, 
            'message' => ""
        )
    );
});
Flight::route('GET /api/telemetri', function(){
    $db = Flight::db();
    $sql = "SELECT * from telemetri order by tanggal desc limit 30";
    $result = $db->query($sql);
    $data = array();
    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }
    Flight::json(
        array(
            'success' => $result==true?1:0, 
            'message' => "",
            'data' => $data
        )
    );
});
Flight::route('GET /api/telemetri/latest', function(){
    $db = Flight::db();
    $sql = "SELECT * from telemetri order by tanggal desc limit 1";
    $result = $db->query($sql);
    Flight::json(
        array(
            'success' => $result==true?1:0, 
            'message' => "",
            'data' => $result->fetch_assoc()
        )
    );
});
Flight::route('/insert', function(){
    $db = Flight::db();
    $request = Flight::request();

    $idMesin = getQuery($request, "idmesin");
    $idProduk = getQuery($request, "idproduk");
    $suhu = getQuery($request, "suhu");
    $arus = getQuery($request, "arus");
    $kelembapan = getQuery($request, "kelembapan");
    $rpm = getQuery($request, "rpm");
    $gas = getQuery($request, "gas");
    // $tanggal = getQuery($request, "tanggal");
    $count1 = getQuery($request, "count1");
    $count2 = getQuery($request, "count2");
    $count3 = getQuery($request, "count3");
    $count4 = getQuery($request, "count4");
    $count5 = getQuery($request, "count5");

    $sql = "INSERT INTO `telemetri` (`id`, `idMesin`, `idProduk`, `suhu`, `arus`, `kelembapan`, `rpm`, `gas`, `tanggal`, `count1`, `count2`, `count3`, `count4`, `count5`) VALUES (NULL, '$idMesin', '$idProduk', '$suhu', '$arus', '$kelembapan', '$rpm', '$gas', '".date("Y-m-d H:i:s")."', '$count1', '$count2', '$count3', '$count4', '$count5')";
    $result = $db->query($sql);

    Flight::json(
        array(
            'success' => $result==true?1:0, 
            'message' => ""
        )
    );
});

Flight::start();


function getQuery($request, $name){
    $value = $request->query[$name];
    if($value==null){
        Flight::json(
            array(
                'success' => 0, 
                'message' => "Tidak ada data $name"
            )
        );
        exit(1);
    }
    return $value;
}

function getData($request, $name){
    $value = $request->data[$name];
    if($value==null){
        Flight::json(
            array(
                'success' => 0, 
                'message' => "Tidak ada data $name"
            )
        );
        exit(1);
    }
    return $value;
}
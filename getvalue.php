<?php
$leng = $_GET['leng'];
$lat = $_GET['lat'];
$status = 'false';
if ($leng == null || $lat == null) {
    $status = 'false';
} else {
    $dataArray = array(
        'leng' => $leng,
        'lat' => $lat
    );
    file_put_contents('data.json', json_encode($dataArray));
    $status = 'ok';
}
echo $status;
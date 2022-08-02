<?php

$data = file_get_contents('./metadata.json');
$myArr = json_decode($data, true);
$myID = $_POST['ID'];
if (key_exists($myID, $myArr)){
    unlink($myArr[$myID]['Save path']);
    unset($myArr[$myID]);
    $serializedData[] = json_encode($myArr, JSON_PRETTY_PRINT);
    file_put_contents('./metadata.json', $serializedData);
    echo 'File deleted!';
} else {
    echo "This file doesn't exists";
}

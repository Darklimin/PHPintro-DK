<?php

$data = file_get_contents('./todolist.json');
$todoArr = json_decode($data, true);
$myID = $_POST['ID'];
if (key_exists($myID, $todoArr)){
    unset($todoArr[$myID]);
    $serializedData[] = json_encode($todoArr, JSON_PRETTY_PRINT);
    file_put_contents('./todolist.json', $serializedData);
    echo 'TOTO deleted!';
} else {
    echo "This TODO doesn't exists";
}




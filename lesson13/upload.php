<?php

$error = $_FILES['fileToUpload']['error'];
$nameArr = explode('.', $_FILES['fileToUpload']['name']);
$type = $nameArr[1];
$size = $_FILES['fileToUpload']['size'];

if ($error !== UPLOAD_ERR_OK){
    echo 'Error uploading file';
    die;
}

if (($type === 'png' || $type === 'jpeg') && $size <= 1048576) {
    $uploadedFileName = $_FILES['fileToUpload']['name'];
    $fileSavePath = './data/' . uniqid() . '_' . $uploadedFileName;
    $tempFilePath = $_FILES['fileToUpload']['tmp_name'];
    move_uploaded_file($tempFilePath, $fileSavePath);
    echo 'Upload successful';
} else {
    echo 'Unsupported file type or file too big';
    die;
}

$myDate = date("Y-m-d H:i:s", filectime($fileSavePath));
$data = file_get_contents('./metadata.json');
$myAllMetaData = json_decode($data, true);
$myAllMetaData[] = [
    'Save path'=>$fileSavePath,
    'File name'=>$uploadedFileName,
    'File size'=>$size,
    'File path'=>realpath($fileSavePath),
    'File created'=>$myDate,
];
$serializedData = json_encode($myAllMetaData, JSON_PRETTY_PRINT);
file_put_contents('./metadata.json', $serializedData);

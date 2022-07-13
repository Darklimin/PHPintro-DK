<!DOCTYPE html>
<html>
<body>
<?PHP
$data = file_get_contents('./todolist.json');
$todoArr = json_decode($data, true);
$todoArr[] = $_POST['todo'];
$serializedData[] = json_encode($todoArr, JSON_PRETTY_PRINT);
file_put_contents('./todolist.json', $serializedData);
echo 'Form submitted!';?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?PHP
$data = file_get_contents('./todolist.json');
$todoArr = json_decode($data, true);
$date = date('Y-m-d H:i');
$toDoDate = 0;
$toDoTime = 0;
$todoArr[] = [
        'todo' => $_POST['todo'],
        'createdAt' => $date,
        'dueDate' => $_POST['my_date'],
        'dueTime' => $_POST['my_time'],
];
$serializedData[] = json_encode($todoArr, JSON_PRETTY_PRINT);
file_put_contents('./todolist.json', $serializedData);
echo 'Form submitted!';?>
</body>
</html>


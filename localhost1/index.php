<!DOCTYPE html>
<html>
    <body>
        <p>New TODO</p>
        </form><form method="POST" action="submit.php">
            <input type="text" name='todo' placeholder="Todo">
            <input type=”date” name="my_date" placeholder="YYYY-MM-DD">
            <input type=”time” name="my_time" placeholder="24:00">
            <input type="submit">
        </form>
    <div>
        <p>TODOs</p>
        <?PHP
        $data = file_get_contents('./todolist.json');
        $todoArr = json_decode($data, true);
        foreach ($todoArr as $value){
            echo $value['todo'] . '    Created At: ' . $value['createdAt'] . "<br>";
            echo 'Due date: ' . $value['dueDate'] . ' ' . $value['dueTime'] . '<br>';
        }
        ?>
    </div>
    </body>
</html>
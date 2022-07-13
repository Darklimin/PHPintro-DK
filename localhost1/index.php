<!DOCTYPE html>
<html>
    <body>
        <p>New TODO</p>
        <form method="POST" action="./submit.php">
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
        if (is_array($todoArr)) {
            foreach ($todoArr as $key => $value) {
                echo $value['todo'] . '    Created At: ' . $value['createdAt'] . "<br>";
                echo 'Due date: ' . $value['dueDate'] . ' ' . $value['dueTime'] . '<br>'; ?>
                <form method="POST" action="./delete.php">
                <input type="hidden" name="ID" value="<?php echo $key; ?>">
                <input type="submit" value="Delete">
                </form>
            <?PHP }
        } else {
            echo 'No TODOs';
        }
        ?>
    </div>
    </body>
</html>
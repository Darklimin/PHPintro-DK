<!DOCTYPE html>
<html>
    <body>
    <fieldset style="width: 40rem">
        <legend>New TODO</legend>
        <form method="POST" action="./submit.php">
            <input type="text" name='todo' placeholder="Todo">
            <input type=”date” name="my_date" placeholder="YYYY-MM-DD">
            <input type=”time” name="my_time" placeholder="24:00">
            <input type="submit">
        </form>
    </fieldset>
    <?PHP
        $data = file_get_contents('./todolist.json');
        $todoArr = json_decode($data, true);?>
        <fieldset style="width: 40rem">
            <legend>TODOs</legend>
            <table >
            <?php if (is_array($todoArr)):
            foreach ($todoArr as $key => $value): ?>
            <tr>
                <td style="width: 20rem"><?php echo $value['todo'] ?></td>
                <td>Created At: <?php echo $value['createdAt'] ?></td>
                <td>
                    <form method="POST" action="./delete.php">
                        <input type="hidden" name="ID" value="<?php echo $key; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>Due date: <?php echo $value['dueDate'] . ' ' . $value['dueTime']?></td>
            </tr>
                <?php endforeach;
            endif; ?>
        </table>
    </body>
</html>
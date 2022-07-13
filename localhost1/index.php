<!DOCTYPE html>
<html>
    <body>
        <p>New TODO</p>
        </form><form method="POST" action="submit.php">
            <input type="text" name='todo' placeholder="Todo">
            <input type="submit">
        </form>
    <div>
        <p>TODOs</p>
        <?PHP
        $data = file_get_contents('./todolist.json');
        $todoArr = json_decode($data, true);
        foreach ($todoArr as $value){
            echo $value . "<br>";
        }
        ?>
    </div>
    </body>
</html>
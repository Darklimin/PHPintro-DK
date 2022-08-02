<!DOCTYPE html>
<html>
<body>
<?PHP
$data = file_get_contents('./metadata.json');
$filesArr = json_decode($data, true);?>
<table >
    <?php if (is_array($filesArr)):
        foreach ($filesArr as $key => $value): ?>
            <tr>
                <td>File name: <a href="<?php echo $value['Save path'] ?>" download><?php echo $value['File name'] ?></a></td>
                <td>File size: <?php echo $value['File size'] ?></td>
                <td>File created: <?php echo $value['File created'] ?></td>
                <td>
                    <form method="POST" action="./delete.php">
                        <input type="hidden" name="ID" value="<?php echo $key; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            <?php endforeach;
    endif; ?>
</table>
</body>
</html>
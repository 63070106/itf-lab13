<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
<?php
include 'condb.php';
$query = "SELECT * FROM guestbook";
$result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
?>

<table border="1">
    <caption>List <a href="form_add.php"> เพิ่มข้อมูล </a> </caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Link</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row) { ?>
        <tr>
            <td><?php echo $row ['ID'];?></td>
            <td><?php echo $row ['Name'];?></td>
            <td><?php echo $row ['Comment'];?></td>
            <td><?php echo $row ['Link'];?></td>
            <td>
            <a href="form_edit.php?id=<?php echo $row ['ID'];?>">edit</a>
        </td>
        <td>
            <a href="form_delete.php?id=<?php echo $row ['ID'];?>" onclick="return confirm('ยืนยันการลบข้อมูล');">delete</a>
        </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php  mysqli_close($condb);   ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        include 'condb.php';
        $id = $_GET['id'];
        $query ="SELECT * FROM guestbook WHERE id=$id";
        $result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
        $row = mysqli_fetch_array($result);

        
    ?>

  <h1>Edit Form</h1>
    <form action="form_edit_db.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['ID'];?>" readonly>
        <br>
        Name
        <input type="text" name="name" placeholder="ชื่อ" required value="<?php echo $row['Name'];?>">
        <br>
        Comment
        <input type="text" name="comment" placeholder="คอมเมนท์" required value="<?php echo $row['Comment'];?>">
        <br>
        Link
        <input type="text" name="link" placeholder="ลิงค์" required value="<?php echo $row['Link'];?>">
        <br>
        <button type="submit"> บันทึก </button>

    </form>

</body>
</html>
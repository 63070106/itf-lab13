<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>

  <h1>Add Form</h1>
    <form action="form_add_db.php" method="post">
        Name
        <input type="text" name="name" placeholder="ชื่อ" required>
        <br>
        Comment
        <input type="text" name="comment" placeholder="คอมเมนท์" required>
        <br>
        Link
        <input type="text" name="link" placeholder="ลิงค์" required>
        <br>
        <button type="submit"> บันทึก </button>

    </form>

</body>
</html>
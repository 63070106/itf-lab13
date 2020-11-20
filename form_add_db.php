<?php
include 'condb.php';


// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


//รับค่าจากฟอร์ม
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $link = $_POST['link'];


//ใส่ลงตาราง
    $sql = "INSERT INTO guestbook
    (
    name,
    comment,
    link
    )
    VALUES
    (
    '$name',
    '$comment',
    '$link'
    )    
    ";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    mysqli_close($condb);


    // echo $sql;

    // echo '<hr>';


    if($result){
        echo "<script type='text/javascript'>";
            echo "alert('Insert Successfully');";
            echo "window.location = 'list.php';";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error');";
            echo "window.location = 'list.php';";
        echo "</script>";
    }
    




?>
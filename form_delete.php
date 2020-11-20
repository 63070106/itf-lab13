<?php
include 'condb.php';


// echo '<pre>';
// print_r($_GET);
// echo '</pre>';


//รับค่าจาก $_GET
    $id = $_GET['id'];


//ลบข้อมูลใส่ลงตาราง
    $sql = "DELETE FROM guestbook WHERE ID = $id";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    mysqli_close($condb);


    // echo $sql;

    // echo '<hr>';


    if($result){
        echo "<script type='text/javascript'>";
            //echo "alert('Update Successfully');";
            echo "window.location = 'list.php';";
        echo "</script>";

    }else{
        echo "<script type='text/javascript'>";
            //echo "alert('Error');";
            echo "window.location = 'list.php';";
        echo "</script>";
    }
    




?>
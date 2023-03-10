<?php
    session_start();
    include('../db/connect_db.php');

    $sql = "SELECT * FROM user_tb";
    $query = $conn->query($sql);

    $username = $_GET['username'];
    $password = $_GET['password'];

    $auth = "SELECT * FROM user_tb WHERE username = '$username' AND password = '$password'";
    $query = $conn->query($auth);
    if($row = mysqli_fetch_array($query)){
        $_SESSION['UserID'] = $row['userid'];
        $_SESSION['Username'] = $row['username'];
        $_SESSION['Password'] = $row['password'];
        $_SESSION['Status'] = $row['approve_status'];
        $_SESSION['Permission'] = $row['permission'];
        $_SESSION['Point'] = $row['point'];
        if($_SESSION['Permission']== 0){
            echo "Hello Admin";
            header('location: ../admin.php');
            }
        if($_SESSION['Permission']== 1){
            echo "Hello User";
            header('location: ../customer.php');
        } else {
            echo "ไม่พบข้อมูล";
            header('refresh:2; url="login.php"');
        }
    } else {
        echo "ไม่พบข้อมูลกรุณาลองใหม่อีกครั้ง";
        header('refresh:2; url="login.php"');   
    }    


?>
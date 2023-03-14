<?php

    include_once("./db/connect_db.php");
    $sql = "SELECT * FROM producttb";
    $query = $conn->query($sql);



    $id = $_GET['id'];

    $update = "DELETE FROM `producttb` WHERE id = '$id' ";
    $query = $conn->query($update);
    

?>
<?php
    require_once "../utils/auth.php";
    // connect to the database
    require_once "../utils/DBConnector.php";

    // confirm that the "id" variable has been set
    if (isset($_GET["id"])) {
        // get the "id" variable from the URL
        $id = $_GET["id"];
        
        // delete record from database
        $sql = "DELETE FROM faculty WHERE idk = '$id'";
        if ($connect->query($sql) === TRUE) {
            // Update record
        } else {
            echo "Error updating record: " . $connect->error;
        }
        setFlash("success", "Đã xóa thành công.");
        // redirect user after delete is successful
        header("Location: faculties.php");
    } else {
    // if the 'id' variable isn't set, redirect the user
        setFlash("error", "ID không hợp lệ.");
        header("Location: index.php");
    }
?>
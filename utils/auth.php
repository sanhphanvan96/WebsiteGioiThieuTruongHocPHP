<?php
    require_once "session.php";
    $tmp = explode("/", $_SERVER["REQUEST_URI"]);
    // Nếu không phải là trang login thì kiểm tra xem đã đăng nhập chưa
    if(strcmp(end($tmp), "login.php") != 0 && !isLogin()) {
        setFlash("warning", "Vui lòng đăng nhập.");
        header("Location: login.php");
        exit();
    }
?>
<?php
    require_once "../utils/session.php";
    if(isLogin()) {
        setLogout();
        setFlash("success", "Đăng xuất thành công!");
    }
    header("Location: login.php");
?>
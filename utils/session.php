<?php
    session_start();

    function isLogin() {
        if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"] === true) {
            return true;
        }
        return false;
    }

    function setIsLogin() {
        $_SESSION["isLogin"] = true;
        return true;
    }

    function setLogout() {
        $_SESSION["isLogin"] = false;
        return true;
    }

    function setFlash($type, $message="") {
        switch ($type) {
            case 'success':
                $_SESSION["flash"]["success"] = $message;
                break;
            case 'error':
                $_SESSION["flash"]["error"] = $message;
                break;
            case 'warning':
                $_SESSION["flash"]["warning"] = $message;
                break;
        }
    }

    function getSuccessFlash() {
        $flash = null;
        if(isset($_SESSION["flash"]) && isset($_SESSION["flash"]["success"]))
            $flash = $_SESSION["flash"]["success"];
        // Flash chỉ hiển thị một lần => xóa flash đi.
        $_SESSION["flash"]["success"] = null;
        return $flash;
    }

    function getErrorFlash() {
        $flash = null;
        if(isset($_SESSION["flash"]) && isset($_SESSION["flash"]["error"]))
            $flash = $_SESSION["flash"]["error"];
        // Flash chỉ hiển thị một lần => xóa flash đi.
        $_SESSION["flash"]["error"] = null;
        return $flash;
    }

    function getWarningFlash() {
        $flash = null;
        if(isset($_SESSION["flash"]) && isset($_SESSION["flash"]["warning"]))
            $flash = $_SESSION["flash"]["warning"];
        // Flash chỉ hiển thị một lần => xóa flash đi.
        $_SESSION["flash"]["warning"] = null;
        return $flash;
    }
?>
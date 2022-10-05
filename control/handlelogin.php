<?php
    include '../controlDB/nguoidungDAO.php';
    if(isset($_GET['submit'])) {
        if(isset($_GET['user']) && isset($_GET['pass'])) {
            $user = $_GET['user'];
            $pass = $_GET['pass'];
            $nd = new nguoidungDAO();
            $arr = $nd->getAll();
            $flag = false;
            foreach($arr as $object) {
                if($object->ten == $user && $object->matkhau == $pass)
                    $flag = true;
            }
            if($flag) {
                $cookie_name = "username";
                $cookie_value = $user;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                header("location: http://localhost/webbansach/index.php?page=home");
            }
            else 
                echo "that bai";
        }
    }
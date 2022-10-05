<?php
    include 'controlDB/sanphamDAO.php';
    $sp = new sanphamDAO();
    $arr = $sp->getAll();
    $sp->closeDB();
    //var_dump($arr);
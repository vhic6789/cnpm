<?php
    include 'controlDB/sanphamDAO.php';
    if(isset($_GET['idsanpham'])) {
        $id = $_GET['idsanpham'];
        $sp = new sanphamDAO();
        $object = $sp->getById($id);
        $sp->closeDB();
    }
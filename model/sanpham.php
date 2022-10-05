<?php
    class sanpham {
        public $id;
        public $tensach;
        public $soluong;
        public $giagoc;
        public $giaban;
        public $ngaynhap;
        public $tacgia;
        public $nhaxuatban;
        public $thongtinthem;
        public $img;
        public function setSanpham($id, $tensach, $soluong, $giagoc, $giaban, $ngaynhap, $tacgia, $nhaxuatban, $thongtinthem, $img) {
            $this->id = $id;
            $this->tensach = $tensach;
            $this->soluong = $soluong;
            $this->giagoc = $giagoc;
            $this->giaban = $giaban;
            $this->ngaynhap = $ngaynhap;
            $this->tacgia = $tacgia;
            $this->nhaxuatban = $nhaxuatban;
            $this->thongtinthem = $thongtinthem;
            $this->img = $img;
        } 
    }
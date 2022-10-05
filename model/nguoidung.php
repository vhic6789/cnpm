<?php
    class nguoidung {
        public $id;
        public $ten;
        public $matkhau;
        public $quyen;

        public function setNguoidung($id, $ten, $matkhau, $quyen) {
            $this->id = $id;
            $this->ten = $ten;
            $this->matkhau = $matkhau;
            $this->quyen = $quyen;
        }
    }
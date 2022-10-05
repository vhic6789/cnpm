<?php
    include "Connect.php";
    include "DAO.php";
    include "model/sanpham.php";
    class sanphamDAO extends DAO {
        private $conn;
        function __construct() {
            $connect = new Connect();
            $this->conn = $connect->open(); 
            mysqli_set_charset($this->conn, 'UTF8');
        }
        public function getAll() {
            $arr = [];
            $sql = "SELECT * FROM sanpham";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $sanpham = new sanpham();
                    $sanpham->setSanpham($row["id"], $row["tensach"], $row["soluong"], $row["giagoc"], $row["giaban"], $row["ngaynhap"], $row["tacgia"], $row["nhaxuatban"], $row["thongtinthem"], $row["img"]);
                    //echo $row['tensach'];
                    $arr[] = $sanpham;
                    //var_dump($sanpham);
                }
            }
            //$this->conn->close();
            return $arr;
        }
        public function insert($object) {
            try {
                $sql = "INSERT INTO sanpham(tensach, soluong, giagoc, giaban, ngaynhap, tacgia, nhaxuatban, thongtinthem, img) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("sss", $object->tensach, $object->soluong, $object->giagoc, $object->giaban, $object->ngaynhap, $object->tacgia, $object->nhaxuatban, $object->thongtinthem, $object->img);
                $stmt->execute();
                $stmt->close();
            } catch (Exception $e) {
                return false;
            }
            //$this->conn->close();
            return true;
        }
        public function update($object) {
            try {
                $sql = "UPDATE sanpham SET tensach=?, soluong=?, giagoc=?, giaban=?, tacgia=?, nhaxuatban=?, thongtinthem=?, img=? WHERE id=?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("ssssssss", $object->tensach, $object->soluong, $object->giagoc, $object->giaban, $object->tacgia, $object->nhaxuatban, $object->thongtinthem, $object->img, $object->id);
                $stmt->execute();
                $stmt->close();
            } catch (Exception $e) {
                return false;
            }
            return true;
        }
        public function delete($id) {   
            return 0;
        }
        public function getById($id) {
            $sanpham = new sanpham();
            try {
                $sql = "SELECT * FROM sanpham WHERE id={$id}";
                $result = $this->conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $sanpham->setSanpham($row["id"], $row["tensach"], $row["soluong"], $row["giagoc"], $row["giaban"], $row["ngaynhap"], $row["tacgia"], $row["nhaxuatban"], $row["thongtinthem"], $row["img"]);
                    }
                }
            } catch (Exception $e) {
                return null;
            }
            return $sanpham;
        }
        public function closeDB() {
            $this->conn->close();
        }
    }

    // $sp = new sanphamDAO();
    // $arr = $sp->getAll();
    // $sp->closeDB();
    // var_dump($arr);
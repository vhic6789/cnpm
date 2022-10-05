<?php
    include "Connect.php";
    include "DAO.php";
    include "../model/nguoidung.php";
    class nguoidungDAO extends DAO {
        private $conn;
        function __construct() {
            $connect = new Connect();
            $this->conn = $connect->open(); 
            mysqli_set_charset($this->conn, 'UTF8');
        }
        public function getAll() {
            $arr = [];
            $sql = "SELECT * FROM nguoidung";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $nguoidung = new nguoidung();
                    $nguoidung->setNguoidung($row["id"], $row["ten"], $row["matkhau"], $row["quyen"]);
                    $arr[] = $nguoidung;
                }
            }
            //$this->conn->close();
            return $arr;
        }
        public function insert($object) {
            try {
                $sql = "INSERT INTO nguoidung(ten, matkhau, quyen) VALUES (?, ?, ?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("sss", $object->ten, $object->matkhau, $object->quyen);
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
                $sql = "UPDATE nguoidung SET ten=?, matkhau=?, quyen=? WHERE id=?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("ssss", $object->ten, $object->matkhau, $object->quyen, $object->id);
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
            $nguoidung = new nguoidung();
            try {
                $sql = "SELECT * FROM nguoidung WHERE id={$id}";
                $result = $this->conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $nguoidung->setNguoidung($row["id"], $row["ten"], $row["matkhau"], $row["quyen"]);
                    }
                }
            } catch (Exception $e) {
                return null;
            }
            return $nguoidung;
        }
        public function closeDB() {
            $this->conn->close();
        }
    }

    //$nd = new nguoidungDAO();
    //var_dump($nd->getAll());

    //$nguoidung = new nguoidung();
    // $nguoidung->setNguoidung("3", "hoasexy", "123", "nguoidung");
    // if($nd->update($nguoidung)) {
    //     echo "update thanh cong";
    // } else {
    //     echo "khong thanh cong";
    // }
   //$nguoidung = $nd->getById("1");
    //var_dump($nguoidung);
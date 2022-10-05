<?php
    abstract class DAO {
        abstract public function insert($object);
        abstract public function update($object);
        abstract public function delete($id);
        abstract public function getAll();
        abstract public function getById($id);
    }
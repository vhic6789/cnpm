<?php
    class connect {
        public $openconn;
        function __construct() {
            $this->openconn = new mysqli("localhost", "root", "", "webbansachtest1");
        }
        public function open() {
            return $this->openconn;
        }
    }
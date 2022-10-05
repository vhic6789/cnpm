<?php
    class Controller {
        //public $model;	

        public function __construct()  
        {  
            //$this->model = new Model();
        } 
        public function getCurURL()
        {
            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
                $pageURL = "https://";
            } else {
              $pageURL = 'http://';
            }
            if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
                $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
            } else {
                $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            }
            return $pageURL;
        }
        public function invoke()
        {
            //if(isset($_GET['http://localhost/webbansach/']))
                $path = $this->getCurURL();

                if(isset($_GET['page'])) {
                    $pagename = $_GET['page'];
                    // if($pagename == "home")
                    //     include 'views/tamplate/home.php';
                    switch($pagename) {
                        case "":
                            include 'views/tamplate/home.php';
                        break;
                        case "home":
                            //include '../control/handlehome.php';
                            include 'views/tamplate/home.php';
                        break;
                        case "login":
                            
                            include 'views/tamplate/login.php';
                        break;
                        case "detail":
                            
                            include 'views/tamplate/detail.php';
                        break;
                        case "cart":
                            
                            include 'views/tamplate/cart.php';
                        break;
                        case "managerProduct":
                            
                            include 'views/tamplate/managerProduct.php';
                        break;
                        case "logout":
                            setcookie("username", "");
                            header("location: ?page=home");
                        break;
                    }
                }
        }
        public function login() {
            if(isset($_GET['submit'])) {
                echo "hi";
            }
        }
    }
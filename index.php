<?php
    // index.php file
    
    include "control/controller.php";

    $controller = new Controller();
    $controller->invoke();
    //echo "hi";

//getCurURL();
//header("location: http://localhost/webbansach/index.php?page=home");
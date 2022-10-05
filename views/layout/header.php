<?php

    if(isset($_COOKIE["username"])) {
        $username = "Xin chào: ".$_COOKIE["username"];
    } else {
        $username = "";
    }

    $html = '
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="?page=home">Shoes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=managerProduct">Manager Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">'.$username.'</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=logout">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=login">Login</a>
                        </li>
                    </ul>

                    <form action="search" method="post" class="form-inline my-2 my-lg-0">
                        <div class="input-group input-group-sm">
                            <input name="txt" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary btn-number">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <a class="btn btn-success btn-sm ml-3" href="?page=cart">
                            <i class="fa fa-shopping-cart"></i> Cart
                            <span class="badge badge-light">3</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Nhà sách bóng đá</h1>
                <p class="lead text-muted mb-0">Uy tín tạo nên thương hiệu với hơn 10 năm bán sách</p>
            </div>
        </section>
    ';
    echo $html;
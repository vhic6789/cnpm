
<?php
    include 'control/handlehome.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="views/static/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--begin of menu-->
        <?php include 'views/layout/header.php';?>
        <!--end of menu-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="#">Sub-category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                        <ul class="list-group category_block">
                     
                                <li class="list-group-item text-white"><a href="#">sách bóng đá</a></li>
                          

                        </ul>
                    </div>
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white text-uppercase">Last product</div>
                        <div class="card-body">
                            <img class="img-fluid" src="#" />
                            <h5 class="card-title">sách bóng đá vn</h5>
                            <p class="card-text">đây là một trong những loại sách đầu tiên về bóng đá vn</p>
                            <p class="bloc_left_price">5.000.000 đ</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="row">
                        <!-- <c:forEach items="${listP}" var="o"> -->
                            
                        <!-- </c:forEach> -->
                        <?php
                            if(isset($arr)) {
                                foreach($arr as $object) {
                                    $html = '
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="card">
                                                <img class="card-img-top" height="100" width="20" src="views/imagers/'.$object->img.'" alt="hình ảnh sách">
                                                <div class="card-body">
                                                    <h4 class="card-title show_txt"><a href="?page=detail&idsanpham='.$object->id.'" title="View Product">'.$object->tensach.'</a></h4>
                                                    <p class="card-text show_txt">'.$object->thongtinthem.'</p>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="btn btn-danger btn-block">'.$object->giaban.' đ</p>
                                                        </div>
                                                        <div class="col">
                                                            <a href="#" class="btn btn-success btn-block">thêm vào giỏ hàng</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                    echo $html;
                                }
                            }
                        ?>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php include 'views/layout/footer.php';?>
        <!-- footer -->
    </body>
</html>


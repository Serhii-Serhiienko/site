<?php include("path.php"); ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/2c6d15d77e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <title>My blog</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- блок карусели START-->
<div class="container">

    <h2 class="slider-title">Top publications</h2>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/image_1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> First slide label</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> First slide label</a></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> First slide label</a></h5>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    </div>
<!-- блок карусели END-->
<!-- блок main start-->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2>Last publication</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_4.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cool article about sites...</a>
                    </h3>
                    <i class="far fa-user"> Author name</i>
                    <i class="far fa-calendar">Mar 24, 2022</i>
                    <p class="preview-text">
                        sidjgodfijgodifjodifjgoidjfgiojdofgi.sdfsdfsdfsdfsdfsdfdfdgsjfgkjsfhgskh
                        dfgdofigdofigjdoifjgodifjgodifjgoidjfg.sdfsdfsdfsdfsdfgsfgsfdgsfdsfgsdfsdf
                    </p>
                </div>
            </div>
        </div>

    <div class="main-content col-md-9 col-12">


        <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="assets/images/image_4.png" alt="" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
                <h3>
                    <a href="#">Cool article about sites...</a>
                </h3>
                <i class="far fa-user"> Author name</i>
                <i class="far fa-calendar">Mar 24, 2022</i>
                <p class="preview-text">
                    sidjgodfijgodifjodifjgoidjfgiojdofgi.
                    dfgdofigdofigjdoifjgodifjgodifjgoidjfg.
                </p>
            </div>
        </div>

    </div>


        <!-- sidebar Content -->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Find here...">
                </form>
            </div>

            <div class="section topics">
                 <h3>Categories</h3>
                <ul>
                    <li><a href="#">Poems</a></li>
                    <li><a href="#">Quotes</a></li>
                    <li><a href="#">Fiction</a></li>
                    <li><a href="#">Biography</a></li>
                    <li><a href="#">Motivation</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Life Lessons</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- блок main end-->
<!-- блок footer-->
<?php include("app/include/footer.php"); ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>
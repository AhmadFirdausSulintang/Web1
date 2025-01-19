<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Template</title>
    <!-- Bootstrap 5 CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- JQuery -->
      <Script src="https://code.jquery.com/jquery-3.6.4.min.js"></Script>
      <style>
        body{
            margin: 0;
        }
        .jumbotron-bg{
            background-image: url('img/Header-Home.jpg');
            background-size: cover;
            background-position: center;
            color:white;
        }
      </style>
</head>
<body>
    <header class="jumbotron-bg text-white text-center py-5">
        <div class="container">
            <h1 clas="display-4"> Selamat Datang di Website Kami</h1>
            <p class="lead">ini Adalah contoh jumbotron dengan latar belakang gambar di bagian atas halaman</p>
        </div>
    </header>

    <div class="conntainer-fluid my-4">
        <div class="row">
            <?php include"Latihan_08_menu.php";?>

            <main class="col-md-10">
                <article>
                    <?php
                    extract($_GET);
                    if(isset($menu)){
                        if($menu == "a"){
                            include "Latihan_08_a.php";
                        }else if($menu == "b"){
                            include "Latihan_08_b.php";
                        }else if($menu=="c"){
                            include"Latihan_08_c.php";
                        }
                        else if($menu=="d"){
                            include"Latihan_08_d.php";
                        }else if ($menu == "alumni") {
                            include "POSTEST_08.php";
                        }else if ($menu == "calumni") {
                            include "Latihan_08_calumni.php";
                        } else if ($menu == "ualumni") {
                            @include "Latihan_08_ualumni.php";
                        }
                    }else{
                        //include "Latihan_08_home.php";
                    }
                    ?>
                </article>
            </Main>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy;2024 Website Kami All Right reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
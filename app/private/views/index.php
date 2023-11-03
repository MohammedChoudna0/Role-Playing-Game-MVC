<?php

require_once(dirname(__FILE__) . '/../../controllers/indexController.php');

$creatures = indexAction();
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Heroes V</title>


    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none me-5">
                    <img src="../../../assets/img/logo.png" alt="logo" height="50">
                </a>
                

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <?php
                if (SessionUtils::loggedIn())
                    echo "<span class='badge badge-success bg-success me-5 '> Has iniciado sesión: " . $_SESSION['user'] . "</span>";
                else {
                    header('Location: ../../public/views/index.php');
                }
                ?>
                    <a class=" me-3  text-dark text-decoration-none" href="../../public/views/user/logout.php">Salir</a>
                    
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Heroes of Might & Magic V </h1>
            </div>
        </header>


        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 ">
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="../../../assets/img/heroes_v.png" alt="Heroes V" class="img-fluid">
                </div>

                <div class="col-md-6 text-left">
                    <h2>Texto de ejemplo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at massa sit amet libero vulputate dignissim. Suspendisse potenti.</p>
                    <a href="../views/creature/insert.php" class="btn btn-primary">Agregar criatura</a>

                </div>
            </div>

            <?php
        for ($i = 0; $i < sizeof($creatures); $i+=3) {
            ?>
            <div class="row"> 
                <?php
                for ($j = $i; $j < ($i + 3); $j++) {
                    if (isset($creatures[$j])) {

                        echo $creatures[$j]->creatureToHTML(true);
                    }
                }
                ?>
            <?php
        }
        ?>
            </div>

        </main>


    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
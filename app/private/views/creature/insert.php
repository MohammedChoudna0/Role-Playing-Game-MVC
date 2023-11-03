<?php
require_once(dirname(__FILE__) . '../../../../../utils/SessionUtils.php');

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
                    <img src="../../../../assets/img/logo.png" alt="logo" height="50">
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


        </header>


        <main>
            <div class="row d-flex justify-content-center">
                <form class="col-md-8" role="form" method="POST" action="../../../controllers/creature/insertController.php">
                    <p class="display-4">Por favor , inserte una criatura : </p>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="text" class="form-control" id="avatar" name="avatar">
                    </div>
                    <div class="mb-3">
                        <label for="attackPower" class="form-label">Poder de Ataque</label>
                        <input type="number" class="form-control" id="attackPower" name="attackPower">
                    </div>
                    <div class="mb-3">
                        <label for="lifeLevel" class="form-label">Nivel de Vida</label>
                        <input type="number" class="form-control" id="lifeLevel" name="lifeLevel">
                    </div>
                    <div class="mb-3">
                        <label for="weaponType" class="form-label">Tipo de Arma</label>
                        <input type="text" class="form-control" id="weaponType" name="weaponType">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar criatura</button>
                </form>
            </div>


        </main>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
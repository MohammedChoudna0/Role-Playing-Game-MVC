<?php
require_once(dirname(__FILE__) . '../../../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '../../../../../app/models/Creature.php');
require_once(dirname(__FILE__) . '../../../../../utils/SessionUtils.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creatureDAO = $creatureDAO->selectById($id);
}
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
                    if (SessionUtils::loggedIn()) {
                        echo "<span class='badge badge-success bg-success me-5 '> Has iniciado sesión: " . $_SESSION['user'] . "</span>";
                        echo "<a class=' me-3  text-dark text-decoration-none' href='../../public/views/user/logout.php'>Salir</a> ";
                    } else {
                        echo " <span class='badge badge-danger bg-danger me-5'> regístrate o inicia sesión.</span>";
                        echo " <a class='me-3  text-dark text-decoration-none ' href='../../../public/views/user/login.php'>Iniciar Sesión</a>
                        ";
                    }
                    ?>
                </nav>
            </div>


        </header>


        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card mt-5">
                            <img src="<?php echo $creatureDAO->getAvatar(); ?>" class="card-img-top" alt="Creature Avatar">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $creatureDAO->getName(); ?></h5>
                                <p class="card-text"><?php echo $creatureDAO->getDescription(); ?></p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>Poder de Ataque:</strong> <?php echo $creatureDAO->getAttackPower(); ?></li>
                                    <li class="list-group-item"><strong>Nivel de Vida:</strong> <?php echo $creatureDAO->getLifeLevel(); ?></li>
                                    <li class="list-group-item"><strong>Tipo de Arma:</strong> <?php echo $creatureDAO->getWeaponType(); ?></li>
                                </ul>
                            </div>
                            <?php
                            if (SessionUtils::loggedIn()) :
                            ?>
                                <div class="card-footer text-center">
                                    <a href="creature/edit.php?id=<?php echo $creatureDAO->getIdCreature(); ?>" class="btn btn-success">Modificar</a>
                                    <a href="../../controllers/creature/deleteController.php?id=<?php echo $creatureDAO->getIdCreature(); ?>" class="btn btn-danger">Borrar</a>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
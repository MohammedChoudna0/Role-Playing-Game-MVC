<?php

require_once(dirname(__FILE__) . '/../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   createAction();
}
function createAction() {

    $name = ValidationsRules::test_input($_POST["name"]);
    $description = ValidationsRules::test_input($_POST["description"]);
    $avatar = ValidationsRules::test_input($_POST["avatar"]);
    $attackPower = ValidationsRules::test_input($_POST["attackPower"]);
    $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
    $weaponType = ValidationsRules::test_input($_POST["weaponType"]);

    $creature = new Creature();
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeaponType($weaponType);

    $creatureDAO = new CreatureDAO();
    $creatureDAO->insert($creature);
 
    header('Location: ../../../index.php');
}
?>

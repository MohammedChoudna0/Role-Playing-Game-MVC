<?php
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/User.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   createAction();
}
function createAction() {
    $email = ValidationsRules::test_input($_POST["email"]);
    $pass = ValidationsRules::test_input($_POST["password"]);
    $name = ValidationsRules::test_input($_POST["name"]);

    $user = new User();
    $user->setEmail($email);
    $user->setPassword($pass);
    $user->setName($name);
    

    $userDAO = new UserDAO();
    $userDAO->insert($user);
    #Inicia session 
    SessionUtils::startSessionIfNotStarted();
    SessionUtils::setSession($user->getEmail());
       
    header('Location: ../../../app/private/views/index.php');   
}

    
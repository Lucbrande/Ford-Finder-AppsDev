<?php
require_once('../model/User.php');
require_once('../model/database.php');
require_once('../model/userDB.php');
require_once('../model/Utility.php');

$userDB = new userDB();


$controllerChoice = filter_input(INPUT_POST, 'controllerRequest');
if ($controllerChoice == NULL) {
    $controllerChoice = filter_input(INPUT_GET, 'controllerRequest');
}

if ($controllerChoice == NULL) {
    $controllerChoice = 'Not-Set (Null)';
}

else if ($controllerChoice == 'register_user') {
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($userName) && !empty($phone)) {
 
        $users = new User($firstName, $lastName, $email, $password, $userName, $phone, 1); // Default active = 1
        $userDB->addUser($users); 
     
        include("user_register_confirmation.php");

    } else  {
        include("register_user.php");
    }
}
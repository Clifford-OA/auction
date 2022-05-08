<?php

include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validateUser.php');

$errors = array();
$name = '';
$email = '';
$contact = '';
$userType = '';
$password = '';
$passwordConf = '';


if (isset($_POST['register-btn'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);

        // log user  in 
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['userType'] = $user['userType'];
        $_SESSION['message'] = $user['Log in successful'];
        $_SESSION['type'] = 'success';

        if ($_SESSION['userType'] === 'user') {
            // TO DO
            // header('location: ' . BASE_URL . '/.php');
        } else {
            header('location: ' . BASE_URL . '/index.php');
        }
        exit();
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $userType = $_POST['userType'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

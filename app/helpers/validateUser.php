<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['name'])) {
        array_push($errors, 'Name is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
    if ($user['password'] !== $user['passwordConf']) {
        array_push($errors, 'Passwords do not match');
    }
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
        array_push($errors, 'Email already exists');
    }

    return $errors;
}

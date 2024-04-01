<?php

use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// * validate form inputs
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = "Provide a valid email address.";
}

if (!Validator::validate($password, 7, 255)) {
    $errors['email'] = "Provide a password of at least 7 chars.";
}

if (!empty($errors)) {
    return view("registration/create.view.php", [
        'errors' => [],
    ]);
}

// * check if acc already exists
    // ! if yes, redirect to the login page
    // ! if no, save to the database and login the user and redirect

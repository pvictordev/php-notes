<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

// validation
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::validate($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

// math the credentials
$user = $db->query('SELECT * FROM users where email = :email', [
    'email' => $email
])->find();

if (!$user) {
    return view('session/create.view.php', [
        'errors' => [
            'email' => 'No matching account found for this email address',
        ]
    ]);
}

if (password_verify($password, $user['password'])) {
    // login the user when credentials match
    login([
        'email' => $email
    ]);

    header('Location: /');
    exit();
}

return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for this email address and password',
    ]
]);

<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

// find the coresponding note
$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize the user
authorize($note['user_id'] === $currentUserId);

// validate the body
$errors = [];

if (!Validator::validate($_POST['body'], 1, 10)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

// if there are no errors, update the note (database table)
if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

// redirect to the notes page
header('Location: /notes');

die();

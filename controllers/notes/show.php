<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config["database"]);

$id = $_GET["id"];
$currentUser = 1;

$note = $db->query(
    "select * from notes where id = :id",
    [
        "id" => $id
    ]
)->find();

authorize($note["user_id"] === $currentUser);

view("notes/create.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);

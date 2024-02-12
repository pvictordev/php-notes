<?php

$config = require "config.php";

$db = new Database($config["database"]);

$heading = "My Notes";

$id = $_GET["id"];
$currentUser = 1;

$note = $db->query("select * from notes where id = :id", 
[
    "id" => $id
])->find();

authorize($note["user_id"] === $currentUser);


require "views/note.view.php";

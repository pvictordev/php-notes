<?php

$heading = "Create Note";

if($_SERVER["REQUEST_METHOD"] === 'POST') {
    dd("submitted");
}

require "views/note-create.view.php";
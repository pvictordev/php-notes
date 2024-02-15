<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function urlIs($path)
{
    return $_SERVER["REQUEST_URI"] === $path;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path, $attributes = [])
{
    return BASE_PATH . $path;
}

function view($path)
{
    extract($attributes);
    require base_path("views/$path");
}

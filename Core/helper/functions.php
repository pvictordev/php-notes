<?php

function base_path($path = '')
{
    return BASE_PATH . $path;
}

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

function abort($status = 404)
{
    http_response_code($status);
    require base_path("views/{$status}.php");
    die();
}

// $status = Response::FORBIDDEN
function authorize($condition, $status = 403)
{
    if (!$condition) {
        abort($status);
    }
}


function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/" . $path);
}

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout()
{
    // log out the user
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['domain'], $params['secure'], $params['httponly']);
}

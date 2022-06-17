<?php

namespace Albet\JwtAuth;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class SessionManager
{
    private const SESSION_KEY = 'jkqvznmro4ti894jmfn0-qmzjskdi142';
    public const COOKIE_KEY = "JWT-TEST";

    public static function login()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            if ($username == "asep" && $password == "asep") {
                $payload = [
                    'username' => 'asep',
                    'role' => 'user'
                ];

                $jwt = JWT::encode($payload, self::SESSION_KEY, 'HS256');
                setcookie(self::COOKIE_KEY, $jwt);
                header("location:EntryPoint.php?url=home");
                exit;
            }
            $message = "Username and password is incorrect";
            $goto = "EntryPoint.php?url=login";
            require_once __DIR__ . "/views/error.php";
            exit;
        }
        require_once __DIR__ . '/views/login.html';
    }

    public static function displayIndex()
    {
        if (!isset($_COOKIE[self::COOKIE_KEY])) {
            $message = "Unauthorized!";
            $goto = "EntryPoint.php?url=login";
            require_once __DIR__ . "/views/error.php";
            exit;
        }
        try {
            $payload = JWT::decode($_COOKIE[self::COOKIE_KEY], new Key(self::SESSION_KEY, 'HS256'));
        } catch (\Exception $e) {
            setcookie(self::COOKIE_KEY, "");
            $message = $e->getMessage();
            $goto = "EntryPoint.php?url=login";
            require_once __DIR__ . "/views/error.php";
            exit;
        }

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            setcookie(self::COOKIE_KEY, "");
            header("location:EntryPoint.php?url=login");
            exit;
        }

        $name = $payload->username;
        $role = $payload->role;
        require_once __DIR__ . '/views/index.php';
        exit;
    }
}

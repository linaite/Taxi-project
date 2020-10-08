<?php

namespace Core;
/**
 *User login - valdo visus loginus
 *
 * Class Session
 * @package Core
 */
class Session
{
    private ?array $user = null;


    public function __construct()
    {
        $this->loginFromCookie();
    }

    /**
     *Login from cookies
     *
     * @return bool
     */
    public function loginFromCookie(): bool
    {
        if (isset($_SESSION['email']) && isset($_SESSION['email'])) {
            if ($this->login($_SESSION['email'], $_SESSION['password'])) {
                return true;
            }
        }

        return false;
    }

    /**
     *Login user
     *
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password): bool
    {
        $users = \App\App::$db->getRowWhere('users', [
            'email' => $username,
            'password' => $password
        ]);
        if ($users) {
            $_SESSION['email'] = $username;
            $_SESSION['password'] = $password;
            $this->user = $users;
            return true;
        }

        return false;
    }

    /**
     *Get user data
     *
     * @return null/array
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     *Logouts user
     *
     * @param null $redirect
     */
    public function logout($redirect = null): void
    {
        $_SESSION = [];
        setcookie('PHPSESSID', null, -1);
        session_destroy();

        if ($redirect) {
            header("Location:$redirect");
            exit;
        }
    }
}
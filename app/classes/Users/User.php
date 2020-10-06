<?php

namespace App\Users;

use Core\DataHolder;

class User extends DataHolder
{
    protected array $properties = [
        'name',
        'lastname',
        'email',
        'password',
        'tel',
        'address'
    ];

    public function setName(?string $user)
    {
        $this->data['name'] = $user;
    }

    public function getName()
    {
        return $this->data['name'] ?? null;
    }

    public function setLastname(?string $password)
    {
        $this->data['lastname'] = $password;
    }

    public function getLastanme()
    {
        return $this->data['lastname'] ?? null;
    }

    public function setEmail(?string $user)
    {
        $this->data['email'] = $user;
    }

    public function getEmail()
    {
        return $this->data['email'] ?? null;
    }

    public function setPassword(?string $user)
    {
        $this->data['password'] = $user;
    }

    public function getPassword()
    {
        return $this->data['password'] ?? null;
    }

    public function setTel(?string $user)
    {
        $this->data['tel'] = $user;
    }

    public function getTel()
    {
        return $this->data['tel'] ?? null;
    }

    public function setAddress(?string $user)
    {
        $this->data['address'] = $user;
    }

    public function getAddress()
    {
        return $this->data['address'] ?? null;
    }
}
<?php

namespace Classes\Users;

class Users
{
    private $users = [
        [
            "login" => "admin",
            "password" => "admin"
        ],
        [
            "login" => "test",
            "password" => "test"
        ]
    ];

    public function verifyUser ($login, $password) {

        if (empty($login))
            throw new \Exception("Введите логин");

        if (empty($password))
            throw new \Exception("Введите пароль");

        foreach ($this->users as $user) {
            if ($user["login"] == $login && $user["password"] == $password) {
                return true;
            } else {
                throw new \Exception("Пользователь не найден");
            }
        }

        return false;
    }
}
<?php

namespace App\Views\Tables;

use App\App;
use Core\Views\Table;

class UsersTable extends Table
{
    public function __construct()
    {

        $users = App::$db->getRowsWhere('users', []);

        $table = [
            'headers' => [
                'Username',
                'Password',
            ],
            'rows' => $users,
        ];

        parent::__construct($table);
    }
}
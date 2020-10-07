<?php

namespace App\Views\Tables;

use App\App;
use Core\Views\Table;

class UsersTable extends Table
{
    public function __construct()
    {

        $data = App::$db->getRowsWhere('data', []);

        $table = [
            'headers' => [
                'UserID',
                'Date',
                'Comment',
            ],
            'rows' => $data,
        ];

        parent::__construct($table);
    }
}
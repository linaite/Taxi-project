<?php

namespace App\Views\Tables;

use App\App;
use Core\Views\Table;

class UsersTable extends Table
{
    public function __construct()
    {

        $data = App::$db->getRowsWhere('data', []);

        $feedbacks = App::$db->getData()['data'];

        foreach ($feedbacks as &$feedback) {
            $feedback['name'] = App::$db->getRowByID('users', $feedback['userid'])['name'];
            unset($feedback['userid']);
        }

        $table = [
            'headers' => [
                'Date',
                'Comment',
                'Name',
            ],
            'rows' => $feedbacks
        ];

        parent::__construct($table);
    }
}
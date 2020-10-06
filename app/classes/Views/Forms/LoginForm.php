<?php

namespace App\Views\Forms;

use Core\Views\Form;

class LoginForm extends Form
{
    public function __construct()
    {
        $form = [
            'attr' => [
                'method' => 'POST',
            ],
            'fields' => [
                'username' => [
                    'label' => 'Username',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'class' => 'username',
                            'placeholder' => 'Username...'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'type' => 'password',
                    'extra' => [
                        'attr' => [
                            'class' => 'password',
                            'placeholder' => 'Password...'
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Login',
                    'extra' => [
                        'attr' => [
                            'class' => 'big-button',
                        ]
                    ]
                ]
            ],
            'validators' => [
                'validate_login',
            ]
        ];

        parent::__construct($form);
    }
}
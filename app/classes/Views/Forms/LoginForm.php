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
                'class'=>'form',
            ],
            'fields' => [
                'email' => [
                    'label' => 'Email',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email',
                    ],
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'class' => 'input',
                            'placeholder' => '@Email...'
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
                            'class' => 'btn',
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
<?php

namespace App\Views\Forms;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        $form = [
            'attr' => [
                'method' => 'POST',
            ],
            'fields' => [
                'username' => [
                    'label' => 'Name',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_user_unique',
                    ],
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'class' => 'text',
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
                            'class' => 'name',
                            'placeholder' => 'Password...'
                        ]
                    ]
                ],

                'repeat_password' => [
                    'label' => 'Repeat paassword',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'type' => 'password',
                    'extra' => [
                        'attr' => [
                            'class' => 'age',
                            'placeholder' => 'Slaptažodis'
                        ]
                    ]
                ]
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Register',
                    'extra' => [
                        'attr' => [
                            'class' => 'big-button',
                        ]
                    ]
                ]
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'repeat_password',
                ],
            ]
        ];

        parent::__construct($form);
    }



}
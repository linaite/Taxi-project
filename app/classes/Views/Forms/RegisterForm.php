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
                'class'=>'form'
            ],
            'fields' => [
                'name' => [
                    'label' => 'Name',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_length_numbers',
                    ],
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'class' => 'input',
                            'placeholder' => 'Name...'
                        ]
                    ]
                ],
                'lastname' => [
                    'label' => 'Lastname',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_length_numbers',
                    ],
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'class' => 'input',
                            'placeholder' => 'Surname...'
                        ]
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_user_unique',
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
                            'class' => 'name',
                            'placeholder' => 'Password...'
                        ]
                    ]
                ],
                'tel' => [
                    'label' => 'Tel. No',
                    'validators' => [
                    ],
                    'type' => 'number',
                    'extra' => [
                        'attr' => [
                            'class' => 'input',
                            'placeholder' => 'Tel.No...'
                        ]
                    ]
                ],
                'address' => [
                    'label' => 'Home address',
                    'validators' => [
                    ],
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'class' => 'input',
                            'placeholder' => 'Home address...'
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Register',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn',
                        ]
                    ]
                ]
            ],
            'validators' => [
//                'validate_fields_match' => [
//                    'password',
//                    'repeat_password',
//                ],
            ]
        ];

        parent::__construct($form);
    }



}
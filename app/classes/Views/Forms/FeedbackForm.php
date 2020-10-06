<?php

namespace App\Views\Forms;

use Core\Views\Form;

class FeedbackForm extends Form
{
    public function __construct()
    {

        $form = [
            'attr' => [
                'method' => 'POST',
            ],
            'fields' => [
                'x' => [
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_range' => [
                            'min' => 0,
                            'max' => 490,
                        ],
                    ],
                    'type' => 'number',
                    'extra' => [
                        'attr' => [
                            'class' => 'text',
                            'placeholder' => 'X kordinate'
                        ]
                    ]
                ],
                'y' => [
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_range' => [
                            'min' => 0,
                            'max' => 490,
                        ],
                    ],
                    'type' => 'number',
                    'extra' => [
                        'attr' => [
                            'class' => 'text',
                            'placeholder' => 'Y kordinate'
                        ]
                    ]
                ],
                'color' => [
                    'type' => 'select',
                    'value' => 'red',
                    'options' => [
                        'red' => 'Red',
                        'black' => 'Black',
                        'green' => 'Green',
                        'blue' => 'Blue',
                    ],
                    'validators' => [
                        'validate_field_select',
                    ],
                ],
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Įdėti pikselį',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn',
                        ]
                    ]
                ],
            ],
            'validators' => [
                'validate_pixels_unique',
            ]
        ];

        parent::__construct($form);
    }
}
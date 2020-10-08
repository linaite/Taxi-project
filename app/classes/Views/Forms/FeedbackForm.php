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
                'class' => 'form feedback_form'
            ],
            'fields' => [
                'Comment' => [
                    'label' => 'Your comment',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_length'
                    ],
                    'type' => 'textarea',
                    'extra' => [
                        'attr' => [
                            'class' => 'textarea',
                            'placeholder' => 'Please, comment here..'
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Sumbit',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn',
                        ]
                    ]
                ],
            ],
        ];

        parent::__construct($form);
    }
}
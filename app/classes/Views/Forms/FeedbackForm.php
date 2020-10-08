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
                    'label' => 'Tell us what you think: suggestions, complaints and compliments!',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_length'
                    ],
                    'type' => 'textarea',
                    'extra' => [
                        'attr' => [
                            'class' => 'textarea',
                            'placeholder' => 'Please, leave your comment here...'
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
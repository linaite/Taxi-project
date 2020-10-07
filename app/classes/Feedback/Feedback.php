<?php

namespace App\Feedback;

use Core\DataHolder;

class Feedback extends DataHolder
{
    protected array $properties = [
        'userid',
        'comment',
        'date',
    ];

    public function setName(?string $name)
    {
        $this->data['name'] = $name;
    }

    public function getName()
    {
        return $this->data['name'] ?? null;
    }

    public function setComment(?string $comment)
    {
        $this->data['comment'] = $comment;
    }

    public function getComment()
    {
        return $this->data['comment'] ?? null;
    }

    public function setDate(?string $date)
    {
        $this->data['date'] = $date;
    }

    public function getDate()
    {
        return $this->data['date'] ?? null;
    }
}
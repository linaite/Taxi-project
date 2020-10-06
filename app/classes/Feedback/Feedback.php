<?php

namespace App\Feedback;

use Core\DataHolder;

class Feedback extends DataHolder
{
    protected array $properties = [
        'x',
        'y',
        'color',
        'username'
    ];

    public function setX(?int $x)
    {
        $this->data['x'] = $x;
    }

    public function getX()
    {
        return $this->data['x'] ?? null;
    }

    public function setY(?int $y)
    {
        $this->data['y'] = $y;
    }

    public function getY()
    {
        return $this->data['y'] ?? null;
    }

    public function setColor(?string $color)
    {
        $this->data['color'] = $color;
    }

    public function getColor()
    {
        return $this->data['color'] ?? null;
    }

    public function setUsername(?string $username)
    {
        $this->data['username'] = $username;
    }

    public function getUsername()
    {
        return $this->data['username'] ?? null;
    }
}
<?php

namespace App\Models;

class Monster extends Fighter
{
    public function __construct(string $name, int $pv, string $image)
    {
        parent::__construct($name, $pv, $image);
    }

    public function getImage(): string
    {
        return 'assets/images/monster/' . $this->image;
    }

}
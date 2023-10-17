<?php
namespace App\Models;
final class Warrior extends Fighter
{
    public function __construct(string $name, int $pv, string $image)
    {
        parent::__construct($name, $pv, $image);
    }
}
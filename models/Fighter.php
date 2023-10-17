<?php
namespace App\Models;

abstract class Fighter
{

    private static int $count = 0;

    private string $name;
    private int $pv;

    protected string $image;

    public function __construct(string $name, int $pv, string $image)
    {
        self::$count += 1;
        $this->name = $name;
        $this->pv = $pv;
        $this->image = $image;
    }

    public static function getCount(): int
    {
        return self::$count;
    }


    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPv(): int
    {
        return $this->pv;
    }

    public function setPv(int $pv): void
    {
        $this->pv = $pv;
    }


}
<?php

declare(strict_types=1);

namespace App\Enums;

abstract class BaseEnum
{
    public function __construct()
    {
        // ...
    }

    abstract public static function getArrayKeys(): array;

    abstract public static function getImplodeKeys(): string;

    abstract public static function getArrayValues(): array;

    abstract public static function getImplodeValues(): string;

    abstract public static function getRandomKey(): string|int;

    abstract public static function getRandomValue(): string|int;
}

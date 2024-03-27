<?php

namespace App\Enums;

class StatusEnum extends BaseEnum
{
    public const DEFAULT = self::ACTIVE;

    public const ACTIVE = 1;

    public const PASSIVE = 0;

    public static function getArrayKeys(): array
    {
        return [
            self::ACTIVE,
            self::PASSIVE,
        ];
    }

    public static function getImplodeKeys(): string
    {
        return implode(',', self::getArrayKeys());
    }

    public static function getArrayValues(): array
    {
        $data = [
            self::ACTIVE => __('Aktif'),
            self::PASSIVE => __('Pasif'),
        ];
        asort($data);

        return $data;
    }

    public static function getImplodeValues(): string
    {
        return implode(',', self::getArrayValues());
    }

    public static function getRandomKey(): string|int
    {
        $keys = self::getArrayKeys();

        return $keys[array_rand($keys)];
    }

    public static function getRandomValue(): string|int
    {
        $values = self::getArrayValues();

        return $values[array_rand($values)];
    }
}

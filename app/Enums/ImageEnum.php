<?php

namespace App\Enums;

class ImageEnum extends BaseEnum
{
    public const MAX_SIZE = 2048;

    public const MAX_COUNT = 5;

    public const JPG = 'jpg';

    public const JPEG = 'jpeg';

    public const PNG = 'png';

    public const GIF = 'gif';

    public const SVG = 'svg';

    public const WEBP = 'webp';

    public function __construct()
    {
        parent::__construct();
        ini_set('memory_limit', '256M');
        ini_set('upload_max_filesize', '2M');
        ini_set('post_max_size', '2M');
        ini_set('max_execution_time', '300');
        ini_set('max_input_time', '300');
    }

    public static function getArrayKeys(): array
    {
        return [
            self::JPG,
            self::JPEG,
            self::PNG,
            self::GIF,
            self::SVG,
            self::WEBP,
        ];
    }

    public static function getImplodeKeys(): string
    {
        return implode(',', self::getArrayKeys());
    }

    public static function getArrayValues(): array
    {
        $data = [
            self::JPG => 'JPG',
            self::JPEG => 'JPEG',
            self::PNG => 'PNG',
            self::GIF => 'GIF',
            self::SVG => 'SVG',
            self::WEBP => 'WEBP',
        ];
        asort($data);

        return $data;
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

    public static function getImplodeValues(): string
    {
        return implode(',', self::getArrayValues());
    }

    public static function getImplodeKeysNotSvg(): string
    {
        $data = self::getArrayKeys();
        unset($data[array_search(self::SVG, $data)]);

        return implode(',', $data);
    }
}

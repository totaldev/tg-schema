<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

/**
 * The name is occupied.
 */
class CheckStickerSetNameResultNameOccupied extends CheckStickerSetNameResult
{
    public const TYPE_NAME = 'checkStickerSetNameResultNameOccupied';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckStickerSetNameResultNameOccupied
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

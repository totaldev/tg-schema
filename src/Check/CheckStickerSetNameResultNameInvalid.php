<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

/**
 * The name is invalid.
 */
class CheckStickerSetNameResultNameInvalid extends CheckStickerSetNameResult
{
    public const TYPE_NAME = 'checkStickerSetNameResultNameInvalid';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckStickerSetNameResultNameInvalid
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

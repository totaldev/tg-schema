<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

/**
 * The name can be set.
 */
class CheckStickerSetNameResultOk extends CheckStickerSetNameResult
{
    public const TYPE_NAME = 'checkStickerSetNameResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckStickerSetNameResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

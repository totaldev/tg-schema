<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * Operation was successfully completed.
 */
class GiftResaleResultOk extends GiftResaleResult
{
    public const TYPE_NAME = 'giftResaleResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftResaleResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

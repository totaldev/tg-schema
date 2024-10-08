<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns localized name of the Telegram support user; for Telegram support only.
 */
class GetSupportName extends TdFunction
{
    public const TYPE_NAME = 'getSupportName';

    public function __construct() {}

    public static function fromArray(array $array): GetSupportName
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

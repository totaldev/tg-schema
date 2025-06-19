<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns available upgraded gift emoji statuses for self status.
 */
class GetUpgradedGiftEmojiStatuses extends TdFunction
{
    public const TYPE_NAME = 'getUpgradedGiftEmojiStatuses';

    public function __construct() {}

    public static function fromArray(array $array): GetUpgradedGiftEmojiStatuses
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

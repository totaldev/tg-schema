<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of paid message reaction.
 */
class PaidReactionType extends TdObject
{
    public const TYPE_NAME = 'PaidReactionType';

    public function __construct() {}

    public static function fromArray(array $array): PaidReactionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

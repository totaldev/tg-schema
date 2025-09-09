<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a source from which the Premium features screen is opened.
 */
class PremiumSource extends TdObject
{
    public const TYPE_NAME = 'PremiumSource';

    public function __construct() {}

    public static function fromArray(array $array): PremiumSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

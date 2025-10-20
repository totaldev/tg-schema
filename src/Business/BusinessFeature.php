<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a feature available to Business user accounts.
 */
class BusinessFeature extends TdObject
{
    public const TYPE_NAME = 'BusinessFeature';

    public function __construct() {}

    public static function fromArray(array $array): BusinessFeature
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

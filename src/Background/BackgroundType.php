<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the type of background.
 */
class BackgroundType extends TdObject
{
    public const TYPE_NAME = 'BackgroundType';

    public function __construct() {}

    public static function fromArray(array $array): BackgroundType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Background;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a fill of a background
 */
class BackgroundFill extends TdObject
{
    public const TYPE_NAME = 'BackgroundFill';

    public function __construct()
    {
    }

    public static function fromArray(array $array): BackgroundFill
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the type of a URL linking to an internal Telegram entity
 */
class TMeUrlType extends TdObject
{
    public const TYPE_NAME = 'TMeUrlType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TMeUrlType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

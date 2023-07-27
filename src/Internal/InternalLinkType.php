<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an internal https://t.me or tg: link, which must be processed by the application in a special way
 */
class InternalLinkType extends TdObject
{
    public const TYPE_NAME = 'InternalLinkType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InternalLinkType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

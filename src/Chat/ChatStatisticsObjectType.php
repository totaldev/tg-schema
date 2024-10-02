<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of object, for which statistics are provided.
 */
class ChatStatisticsObjectType extends TdObject
{
    public const TYPE_NAME = 'ChatStatisticsObjectType';

    public function __construct() {}

    public static function fromArray(array $array): ChatStatisticsObjectType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of public chat.
 */
class PublicChatType extends TdObject
{
    public const TYPE_NAME = 'PublicChatType';

    public function __construct() {}

    public static function fromArray(array $array): PublicChatType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

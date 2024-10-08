<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a chat event.
 */
class ChatEventAction extends TdObject
{
    public const TYPE_NAME = 'ChatEventAction';

    public function __construct() {}

    public static function fromArray(array $array): ChatEventAction
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

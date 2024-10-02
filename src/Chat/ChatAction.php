<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the different types of activity in a chat.
 */
class ChatAction extends TdObject
{
    public const TYPE_NAME = 'ChatAction';

    public function __construct() {}

    public static function fromArray(array $array): ChatAction
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Top;

/**
 * A category containing frequently used chats used for calls.
 */
class TopChatCategoryCalls extends TopChatCategory
{
    public const TYPE_NAME = 'topChatCategoryCalls';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TopChatCategoryCalls
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

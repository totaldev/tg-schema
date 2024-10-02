<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns supergroup and channel chats in which the current user has the right to post stories. The chats must be rechecked with canSendStory before actually
 * trying to post a story there.
 */
class GetChatsToSendStories extends TdFunction
{
    public const TYPE_NAME = 'getChatsToSendStories';

    public function __construct() {}

    public static function fromArray(array $array): GetChatsToSendStories
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

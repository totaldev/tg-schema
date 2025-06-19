<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether the current user can post a story on behalf of a chat; requires can_post_stories right for supergroup and channel chats.
 */
class CanPostStory extends TdFunction
{
    public const TYPE_NAME = 'canPostStory';

    public function __construct(
        /**
         * Chat identifier. Pass Saved Messages chat identifier when posting a story on behalf of the current user.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): CanPostStory
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}

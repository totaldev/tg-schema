<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the marked as unread state of a chat.
 */
class ToggleChatIsMarkedAsUnread extends TdFunction
{
    public const TYPE_NAME = 'toggleChatIsMarkedAsUnread';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of is_marked_as_unread.
         */
        protected bool $isMarkedAsUnread
    ) {}

    public static function fromArray(array $array): ToggleChatIsMarkedAsUnread
    {
        return new static(
            $array['chat_id'],
            $array['is_marked_as_unread'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'is_marked_as_unread' => $this->isMarkedAsUnread,
        ];
    }
}

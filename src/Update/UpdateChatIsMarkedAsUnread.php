<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A chat was marked as unread or was read.
 */
class UpdateChatIsMarkedAsUnread extends Update
{
    public const string TYPE_NAME = 'updateChatIsMarkedAsUnread';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of is_marked_as_unread.
         */
        protected bool $isMarkedAsUnread,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatIsMarkedAsUnread
    {
        return new static(
            chatId          : $array['chat_id'],
            isMarkedAsUnread: $array['is_marked_as_unread'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsMarkedAsUnread(bool $value): static
    {
        $this->isMarkedAsUnread = $value;

        return $this;
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

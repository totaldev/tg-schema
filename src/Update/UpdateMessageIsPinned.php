<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The message pinned state was changed.
 */
class UpdateMessageIsPinned extends Update
{
    public const string TYPE_NAME = 'updateMessageIsPinned';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * True, if the message is pinned.
         */
        protected bool $isPinned,
        /**
         * The message identifier.
         */
        protected int  $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageIsPinned
    {
        return new static(
            chatId   : $array['chat_id'],
            isPinned : $array['is_pinned'],
            messageId: $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'is_pinned'  => $this->isPinned,
            'message_id' => $this->messageId,
        ];
    }
}

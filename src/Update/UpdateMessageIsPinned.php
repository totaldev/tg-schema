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
    public const TYPE_NAME = 'updateMessageIsPinned';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * The message identifier.
         */
        protected int  $messageId,
        /**
         * True, if the message is pinned.
         */
        protected bool $isPinned
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_pinned'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'is_pinned'  => $this->isPinned,
        ];
    }
}

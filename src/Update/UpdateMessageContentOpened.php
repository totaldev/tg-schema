<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The message content was opened. Updates voice note messages to "listened", video note messages to "viewed" and starts the self-destruct timer.
 */
class UpdateMessageContentOpened extends Update
{
    public const string TYPE_NAME = 'updateMessageContentOpened';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Message identifier.
         */
        protected int $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageContentOpened
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
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
            'message_id' => $this->messageId,
        ];
    }
}

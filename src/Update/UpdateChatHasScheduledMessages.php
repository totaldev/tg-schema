<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A chat's has_scheduled_messages field has changed.
 */
class UpdateChatHasScheduledMessages extends Update
{
    public const string TYPE_NAME = 'updateChatHasScheduledMessages';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of has_scheduled_messages.
         */
        protected bool $hasScheduledMessages,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatHasScheduledMessages
    {
        return new static(
            chatId              : $array['chat_id'],
            hasScheduledMessages: $array['has_scheduled_messages'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setHasScheduledMessages(bool $value): static
    {
        $this->hasScheduledMessages = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'has_scheduled_messages' => $this->hasScheduledMessages,
        ];
    }
}

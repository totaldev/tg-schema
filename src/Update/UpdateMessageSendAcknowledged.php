<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A request to send a message has reached the Telegram server. This doesn't mean that the message will be sent successfully. This update is sent only if the
 * option "use_quick_ack" is set to true. This update may be sent multiple times for the same message.
 */
class UpdateMessageSendAcknowledged extends Update
{
    public const string TYPE_NAME = 'updateMessageSendAcknowledged';

    public function __construct(
        /**
         * The chat identifier of the sent message.
         */
        protected int $chatId,
        /**
         * A temporary message identifier.
         */
        protected int $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageSendAcknowledged
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

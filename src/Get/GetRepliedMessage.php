<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a non-bundled message that is replied by a given message. Also, returns the pinned message, the game message, the invoice message,
 * the message with a previously set same background, the giveaway message, and the topic creation message for messages of the types messagePinMessage,
 * messageGameScore, messagePaymentSuccessful, messageChatSetBackground, messageGiveawayCompleted and topic messages without non-bundled replied message
 * respectively. Returns a 404 error if the message doesn't exist.
 */
class GetRepliedMessage extends TdFunction
{
    public const TYPE_NAME = 'getRepliedMessage';

    public function __construct(
        /**
         * Identifier of the chat the message belongs to.
         */
        protected int $chatId,
        /**
         * Identifier of the reply message.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): GetRepliedMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}

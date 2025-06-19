<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Decline;

use Totaldev\TgSchema\TdFunction;

/**
 * Declines an invitation to an active group call via messageGroupCall. Can be called both by the sender and the receiver of the invitation.
 */
class DeclineGroupCallInvitation extends TdFunction
{
    public const TYPE_NAME = 'declineGroupCallInvitation';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int $chatId,
        /**
         * Identifier of the message of the type messageGroupCall.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): DeclineGroupCallInvitation
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

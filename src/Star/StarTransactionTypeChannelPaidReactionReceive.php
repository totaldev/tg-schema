<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a receiving of a paid reaction to a message by the channel chat; for channel chats only.
 */
class StarTransactionTypeChannelPaidReactionReceive extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeChannelPaidReactionReceive';

    public function __construct(
        /**
         * Identifier of the reacted message; can be 0 or an identifier of a deleted message.
         */
        protected int $messageId,
        /**
         * Identifier of the user that added the paid reaction.
         */
        protected int $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidReactionReceive
    {
        return new static(
            messageId: $array['message_id'],
            userId   : $array['user_id'],
        );
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'user_id'    => $this->userId,
        ];
    }
}

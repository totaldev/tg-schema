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
    public const TYPE_NAME = 'starTransactionTypeChannelPaidReactionReceive';

    public function __construct(
        /**
         * Identifier of the user that added the paid reaction.
         */
        protected int $userId,
        /**
         * Identifier of the reacted message; can be 0 or an identifier of a deleted message.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidReactionReceive
    {
        return new static(
            $array['user_id'],
            $array['message_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'message_id' => $this->messageId,
        ];
    }
}

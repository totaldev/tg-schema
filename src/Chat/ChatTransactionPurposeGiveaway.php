<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * User received Telegram Stars from a giveaway.
 */
class ChatTransactionPurposeGiveaway extends ChatTransactionPurpose
{
    public const TYPE_NAME = 'chatTransactionPurposeGiveaway';

    public function __construct(
        /**
         * Identifier of the message with giveaway; can be 0 or an identifier of a deleted message.
         */
        protected int $giveawayMessageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTransactionPurposeGiveaway
    {
        return new static(
            $array['giveaway_message_id'],
        );
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'giveaway_message_id' => $this->giveawayMessageId,
        ];
    }
}

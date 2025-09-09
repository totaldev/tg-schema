<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a receiving of a paid message; for regular users, supergroup and channel chats only.
 */
class StarTransactionTypePaidMessageReceive extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypePaidMessageReceive';

    public function __construct(
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender $senderId,
        /**
         * Number of received paid messages.
         */
        protected int           $messageCount,
        /**
         * The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars paid for message sending.
         */
        protected int           $commissionPerMille,
        /**
         * The amount of Telegram Stars that were received by Telegram; can be negative for refunds.
         */
        protected StarAmount    $commissionStarAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePaidMessageReceive
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['message_count'],
            $array['commission_per_mille'],
            TdSchemaRegistry::fromArray($array['commission_star_amount']),
        );
    }

    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    public function getCommissionStarAmount(): StarAmount
    {
        return $this->commissionStarAmount;
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'sender_id'              => $this->senderId->typeSerialize(),
            'message_count'          => $this->messageCount,
            'commission_per_mille'   => $this->commissionPerMille,
            'commission_star_amount' => $this->commissionStarAmount->typeSerialize(),
        ];
    }
}

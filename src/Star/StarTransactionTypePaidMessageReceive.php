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
    public const string TYPE_NAME = 'starTransactionTypePaidMessageReceive';

    public function __construct(
        /**
         * The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars paid for message sending.
         */
        protected int           $commissionPerMille,
        /**
         * The amount of Telegram Stars that were received by Telegram; can be negative for refunds.
         */
        protected StarAmount    $commissionStarAmount,
        /**
         * Number of received paid messages.
         */
        protected int           $messageCount,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender $senderId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePaidMessageReceive
    {
        return new static(
            commissionPerMille  : $array['commission_per_mille'],
            commissionStarAmount: TdSchemaRegistry::fromArray($array['commission_star_amount']),
            messageCount        : $array['message_count'],
            senderId            : TdSchemaRegistry::fromArray($array['sender_id']),
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

    public function setCommissionPerMille(int $value): static
    {
        $this->commissionPerMille = $value;

        return $this;
    }

    public function setCommissionStarAmount(StarAmount $value): static
    {
        $this->commissionStarAmount = $value;

        return $this;
    }

    public function setMessageCount(int $value): static
    {
        $this->messageCount = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'commission_per_mille'   => $this->commissionPerMille,
            'commission_star_amount' => $this->commissionStarAmount->jsonSerialize(),
            'message_count'          => $this->messageCount,
            'sender_id'              => $this->senderId->jsonSerialize(),
        ];
    }
}

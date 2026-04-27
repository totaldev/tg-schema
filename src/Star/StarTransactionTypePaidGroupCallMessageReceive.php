<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a receiving of a paid group call message; relevant for regular users and channel chats only.
 */
class StarTransactionTypePaidGroupCallMessageReceive extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypePaidGroupCallMessageReceive';

    public function __construct(
        /**
         * The number of Telegram Stars received by the Telegram for each 1000 Telegram Stars paid for message sending.
         */
        protected int           $commissionPerMille,
        /**
         * The Telegram Star amount that was received by Telegram; can be negative for refunds.
         */
        protected StarAmount    $commissionStarAmount,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender $senderId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePaidGroupCallMessageReceive
    {
        return new static(
            commissionPerMille  : $array['commission_per_mille'],
            commissionStarAmount: TdSchemaRegistry::fromArray($array['commission_star_amount']),
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
            'sender_id'              => $this->senderId->jsonSerialize(),
        ];
    }
}

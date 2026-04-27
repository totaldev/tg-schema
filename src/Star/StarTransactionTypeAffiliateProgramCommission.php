<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a receiving of a commission from an affiliate program; relevant for regular users, bots and channel chats only.
 */
class StarTransactionTypeAffiliateProgramCommission extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeAffiliateProgramCommission';

    public function __construct(
        /**
         * Identifier of the chat that created the affiliate program.
         */
        protected int $chatId,
        /**
         * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner.
         */
        protected int $commissionPerMille,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeAffiliateProgramCommission
    {
        return new static(
            chatId            : $array['chat_id'],
            commissionPerMille: $array['commission_per_mille'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCommissionPerMille(int $value): static
    {
        $this->commissionPerMille = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'commission_per_mille' => $this->commissionPerMille,
        ];
    }
}

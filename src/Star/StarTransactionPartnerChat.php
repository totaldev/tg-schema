<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Chat\ChatTransactionPurpose;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a transaction with a supergroup or a channel chat.
 */
class StarTransactionPartnerChat extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerChat';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int                    $chatId,
        /**
         * Purpose of the transaction.
         */
        protected ChatTransactionPurpose $purpose,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerChat
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPurpose(): ChatTransactionPurpose
    {
        return $this->purpose;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}

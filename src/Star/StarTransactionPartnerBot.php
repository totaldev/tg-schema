<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Bot\BotTransactionPurpose;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a transaction with a bot.
 */
class StarTransactionPartnerBot extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerBot';

    public function __construct(
        /**
         * Identifier of the bot.
         */
        protected int                   $userId,
        /**
         * Purpose of the transaction.
         */
        protected BotTransactionPurpose $purpose,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerBot
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getPurpose(): BotTransactionPurpose
    {
        return $this->purpose;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}

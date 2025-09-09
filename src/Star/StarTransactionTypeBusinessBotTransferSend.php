<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transfer of Telegram Stars to a business bot; for regular users only.
 */
class StarTransactionTypeBusinessBotTransferSend extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBusinessBotTransferSend';

    public function __construct(
        /**
         * Identifier of the bot that received Telegram Stars.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBusinessBotTransferSend
    {
        return new static(
            $array['user_id'],
        );
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
        ];
    }
}

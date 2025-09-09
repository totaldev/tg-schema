<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a transfer of Telegram Stars from a business account; for bots only.
 */
class StarTransactionTypeBusinessBotTransferReceive extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBusinessBotTransferReceive';

    public function __construct(
        /**
         * Identifier of the user that sent Telegram Stars.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBusinessBotTransferReceive
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

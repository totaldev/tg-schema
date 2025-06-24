<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a deposit of Telegram Stars by another user; for regular users only.
 */
class StarTransactionTypeUserDeposit extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeUserDeposit';

    public function __construct(
        /**
         * Identifier of the user that gifted Telegram Stars; 0 if the user was anonymous.
         */
        protected int      $userId,
        /**
         * The sticker to be shown in the transaction information; may be null if unknown.
         */
        protected ?Sticker $sticker
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeUserDeposit
    {
        return new static(
            $array['user_id'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
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
            'sticker' => $this->sticker ?? null,
        ];
    }
}

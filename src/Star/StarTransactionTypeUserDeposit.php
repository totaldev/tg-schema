<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a deposit of Telegram Stars by another user; relevant for regular users only.
 */
class StarTransactionTypeUserDeposit extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeUserDeposit';

    public function __construct(
        /**
         * The sticker to be shown in the transaction information; may be null if unknown.
         */
        protected ?Sticker $sticker,
        /**
         * Identifier of the user who gifted Telegram Stars; 0 if the user was anonymous.
         */
        protected int      $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeUserDeposit
    {
        return new static(
            sticker: (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            userId : $array['user_id'],
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

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'user_id' => $this->userId,
        ];
    }
}

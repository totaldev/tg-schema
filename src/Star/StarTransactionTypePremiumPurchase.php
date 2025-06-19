<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of Telegram Premium subscription; for regular users and bots only.
 */
class StarTransactionTypePremiumPurchase extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypePremiumPurchase';

    public function __construct(
        /**
         * Identifier of the user that received the Telegram Premium subscription.
         */
        protected int      $userId,
        /**
         * Number of months the Telegram Premium subscription will be active.
         */
        protected int      $monthCount,
        /**
         * A sticker to be shown in the transaction information; may be null if unknown.
         */
        protected ?Sticker $sticker
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypePremiumPurchase
    {
        return new static(
            $array['user_id'],
            $array['month_count'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
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
            '@type'       => static::TYPE_NAME,
            'user_id'     => $this->userId,
            'month_count' => $this->monthCount,
            'sticker'     => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}

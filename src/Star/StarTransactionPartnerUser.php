<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a gift of Telegram Stars from another user.
 */
class StarTransactionPartnerUser extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerUser';

    public function __construct(
        /**
         * Identifier of the user; 0 if the gift was anonymous.
         */
        protected int      $userId,
        /**
         * A sticker to be shown in the transaction information; may be null if unknown.
         */
        protected ?Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerUser
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
            'sticker' => (isset($this->sticker) ? $this->sticker : null),
        ];
    }
}

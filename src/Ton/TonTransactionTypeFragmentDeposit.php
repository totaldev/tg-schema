<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a deposit of Toncoins from Fragment.
 */
class TonTransactionTypeFragmentDeposit extends TonTransactionType
{
    public const TYPE_NAME = 'tonTransactionTypeFragmentDeposit';

    public function __construct(
        /**
         * True, if the transaction is a gift from another user.
         */
        protected bool     $isGift,
        /**
         * The sticker to be shown in the transaction information; may be null if unknown.
         */
        protected ?Sticker $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeFragmentDeposit
    {
        return new static(
            $array['is_gift'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getIsGift(): bool
    {
        return $this->isGift;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'is_gift' => $this->isGift,
            'sticker' => $this->sticker ?? null,
        ];
    }
}

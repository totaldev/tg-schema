<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a gift auction was closed by the user.
 */
class CloseGiftAuction extends TdFunction
{
    public const string TYPE_NAME = 'closeGiftAuction';

    public function __construct(
        /**
         * Identifier of the gift, which auction was closed.
         */
        protected int $giftId
    ) {}

    public static function fromArray(array $array): CloseGiftAuction
    {
        return new static(
            giftId: $array['gift_id'],
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function setGiftId(int $value): static
    {
        $this->giftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'gift_id' => $this->giftId,
        ];
    }
}

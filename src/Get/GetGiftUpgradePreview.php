<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns examples of possible upgraded gifts for a regular gift.
 */
class GetGiftUpgradePreview extends TdFunction
{
    public const TYPE_NAME = 'getGiftUpgradePreview';

    public function __construct(
        /**
         * Identifier of the gift.
         */
        protected int $giftId
    ) {}

    public static function fromArray(array $array): GetGiftUpgradePreview
    {
        return new static(
            $array['gift_id'],
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'gift_id' => $this->giftId,
        ];
    }
}

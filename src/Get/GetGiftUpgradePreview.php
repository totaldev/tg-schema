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
    public const string TYPE_NAME = 'getGiftUpgradePreview';

    public function __construct(
        /**
         * Identifier of the regular gift.
         */
        protected int $regularGiftId
    ) {}

    public static function fromArray(array $array): GetGiftUpgradePreview
    {
        return new static(
            regularGiftId: $array['regular_gift_id'],
        );
    }

    public function getRegularGiftId(): int
    {
        return $this->regularGiftId;
    }

    public function setRegularGiftId(int $value): static
    {
        $this->regularGiftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'regular_gift_id' => $this->regularGiftId,
        ];
    }
}

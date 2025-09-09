<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * Identifier of a gift symbol.
 */
class UpgradedGiftAttributeIdSymbol extends UpgradedGiftAttributeId
{
    public const TYPE_NAME = 'upgradedGiftAttributeIdSymbol';

    public function __construct(
        /**
         * Identifier of the sticker representing the symbol.
         */
        protected int $stickerId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftAttributeIdSymbol
    {
        return new static(
            $array['sticker_id'],
        );
    }

    public function getStickerId(): int
    {
        return $this->stickerId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'sticker_id' => $this->stickerId,
        ];
    }
}

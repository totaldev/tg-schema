<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes color scheme for the current user based on an owned or a hosted upgraded gift; for Telegram Premium users only.
 */
class SetUpgradedGiftColors extends TdFunction
{
    public const TYPE_NAME = 'setUpgradedGiftColors';

    public function __construct(
        /**
         * Identifier of the upgradedGiftColors scheme to use.
         */
        protected int $upgradedGiftColorsId
    ) {}

    public static function fromArray(array $array): SetUpgradedGiftColors
    {
        return new static(
            $array['upgraded_gift_colors_id'],
        );
    }

    public function getUpgradedGiftColorsId(): int
    {
        return $this->upgradedGiftColorsId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'upgraded_gift_colors_id' => $this->upgradedGiftColorsId,
        ];
    }
}

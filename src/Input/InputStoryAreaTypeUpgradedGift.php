<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An area with an upgraded gift.
 */
class InputStoryAreaTypeUpgradedGift extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeUpgradedGift';

    public function __construct(
        /**
         * Unique name of the upgraded gift.
         */
        protected string $giftName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypeUpgradedGift
    {
        return new static(
            $array['gift_name'],
        );
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'gift_name' => $this->giftName,
        ];
    }
}

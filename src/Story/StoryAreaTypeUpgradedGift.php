<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * An area with an upgraded gift.
 */
class StoryAreaTypeUpgradedGift extends StoryAreaType
{
    public const string TYPE_NAME = 'storyAreaTypeUpgradedGift';

    public function __construct(
        /**
         * Unique name of the upgraded gift.
         */
        protected string $giftName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryAreaTypeUpgradedGift
    {
        return new static(
            giftName: $array['gift_name'],
        );
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function setGiftName(string $value): static
    {
        $this->giftName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'gift_name' => $this->giftName,
        ];
    }
}

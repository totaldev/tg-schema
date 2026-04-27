<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeSettings;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * Describes a chat theme based on an upgraded gift.
 */
class GiftChatTheme extends TdObject
{
    public const string TYPE_NAME = 'giftChatTheme';

    public function __construct(
        /**
         * Theme settings for a dark chat theme.
         */
        protected ThemeSettings $darkSettings,
        /**
         * The gift.
         */
        protected UpgradedGift  $gift,
        /**
         * Theme settings for a light chat theme.
         */
        protected ThemeSettings $lightSettings,
    ) {}

    public static function fromArray(array $array): GiftChatTheme
    {
        return new static(
            darkSettings : TdSchemaRegistry::fromArray($array['dark_settings']),
            gift         : TdSchemaRegistry::fromArray($array['gift']),
            lightSettings: TdSchemaRegistry::fromArray($array['light_settings']),
        );
    }

    public function getDarkSettings(): ThemeSettings
    {
        return $this->darkSettings;
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getLightSettings(): ThemeSettings
    {
        return $this->lightSettings;
    }

    public function setDarkSettings(ThemeSettings $value): static
    {
        $this->darkSettings = $value;

        return $this;
    }

    public function setGift(UpgradedGift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setLightSettings(ThemeSettings $value): static
    {
        $this->lightSettings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'dark_settings'  => $this->darkSettings->jsonSerialize(),
            'gift'           => $this->gift->jsonSerialize(),
            'light_settings' => $this->lightSettings->jsonSerialize(),
        ];
    }
}

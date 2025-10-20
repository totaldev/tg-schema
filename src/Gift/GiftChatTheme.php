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
    public const TYPE_NAME = 'giftChatTheme';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift  $gift,
        /**
         * Theme settings for a light chat theme.
         */
        protected ThemeSettings $lightSettings,
        /**
         * Theme settings for a dark chat theme.
         */
        protected ThemeSettings $darkSettings,
    ) {}

    public static function fromArray(array $array): GiftChatTheme
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            TdSchemaRegistry::fromArray($array['light_settings']),
            TdSchemaRegistry::fromArray($array['dark_settings']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'gift'           => $this->gift->typeSerialize(),
            'light_settings' => $this->lightSettings->typeSerialize(),
            'dark_settings'  => $this->darkSettings->typeSerialize(),
        ];
    }
}

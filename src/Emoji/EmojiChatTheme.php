<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeSettings;

/**
 * Describes a chat theme based on an emoji.
 */
class EmojiChatTheme extends TdObject
{
    public const string TYPE_NAME = 'emojiChatTheme';

    public function __construct(
        /**
         * Theme settings for a dark chat theme.
         */
        protected ThemeSettings $darkSettings,
        /**
         * Theme settings for a light chat theme.
         */
        protected ThemeSettings $lightSettings,
        /**
         * Theme name.
         */
        protected string        $name,
    ) {}

    public static function fromArray(array $array): EmojiChatTheme
    {
        return new static(
            darkSettings : TdSchemaRegistry::fromArray($array['dark_settings']),
            lightSettings: TdSchemaRegistry::fromArray($array['light_settings']),
            name         : $array['name'],
        );
    }

    public function getDarkSettings(): ThemeSettings
    {
        return $this->darkSettings;
    }

    public function getLightSettings(): ThemeSettings
    {
        return $this->lightSettings;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDarkSettings(ThemeSettings $value): static
    {
        $this->darkSettings = $value;

        return $this;
    }

    public function setLightSettings(ThemeSettings $value): static
    {
        $this->lightSettings = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'dark_settings'  => $this->darkSettings->jsonSerialize(),
            'light_settings' => $this->lightSettings->jsonSerialize(),
            'name'           => $this->name,
        ];
    }
}

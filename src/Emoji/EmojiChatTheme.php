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
         * Theme name.
         */
        protected string        $name,
        /**
         * Theme settings for a light chat theme.
         */
        protected ThemeSettings $lightSettings,
        /**
         * Theme settings for a dark chat theme.
         */
        protected ThemeSettings $darkSettings,
    ) {}

    public static function fromArray(array $array): EmojiChatTheme
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['light_settings']),
            TdSchemaRegistry::fromArray($array['dark_settings']),
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
            'name'           => $this->name,
            'light_settings' => $this->lightSettings->typeSerialize(),
            'dark_settings'  => $this->darkSettings->typeSerialize(),
        ];
    }
}

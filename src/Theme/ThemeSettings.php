<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Theme;

use Totaldev\TgSchema\Background\Background;
use Totaldev\TgSchema\Background\BackgroundFill;
use Totaldev\TgSchema\Built\BuiltInTheme;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes theme settings.
 */
class ThemeSettings extends TdObject
{
    public const string TYPE_NAME = 'themeSettings';

    public function __construct(
        /**
         * Base theme for this theme.
         */
        protected BuiltInTheme    $baseTheme,
        /**
         * Theme accent color in ARGB format.
         */
        protected int             $accentColor,
        /**
         * The background to be used in chats; may be null.
         */
        protected ?Background     $background,
        /**
         * The fill to be used as a background for outgoing messages; may be null if the fill from the base theme must be used instead.
         */
        protected ?BackgroundFill $outgoingMessageFill,
        /**
         * If true, the freeform gradient fill needs to be animated on every sent message.
         */
        protected bool            $animateOutgoingMessageFill,
        /**
         * Accent color of outgoing messages in ARGB format.
         */
        protected int             $outgoingMessageAccentColor,
    ) {}

    public static function fromArray(array $array): ThemeSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['base_theme']),
            $array['accent_color'],
            isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null,
            isset($array['outgoing_message_fill']) ? TdSchemaRegistry::fromArray($array['outgoing_message_fill']) : null,
            $array['animate_outgoing_message_fill'],
            $array['outgoing_message_accent_color'],
        );
    }

    public function getAccentColor(): int
    {
        return $this->accentColor;
    }

    public function getAnimateOutgoingMessageFill(): bool
    {
        return $this->animateOutgoingMessageFill;
    }

    public function getBackground(): ?Background
    {
        return $this->background;
    }

    public function getBaseTheme(): BuiltInTheme
    {
        return $this->baseTheme;
    }

    public function getOutgoingMessageAccentColor(): int
    {
        return $this->outgoingMessageAccentColor;
    }

    public function getOutgoingMessageFill(): ?BackgroundFill
    {
        return $this->outgoingMessageFill;
    }

    public function setAccentColor(int $value): static
    {
        $this->accentColor = $value;

        return $this;
    }

    public function setAnimateOutgoingMessageFill(bool $value): static
    {
        $this->animateOutgoingMessageFill = $value;

        return $this;
    }

    public function setBackground(?Background $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setBaseTheme(BuiltInTheme $value): static
    {
        $this->baseTheme = $value;

        return $this;
    }

    public function setOutgoingMessageAccentColor(int $value): static
    {
        $this->outgoingMessageAccentColor = $value;

        return $this;
    }

    public function setOutgoingMessageFill(?BackgroundFill $value): static
    {
        $this->outgoingMessageFill = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'base_theme'                    => $this->baseTheme->typeSerialize(),
            'accent_color'                  => $this->accentColor,
            'background'                    => $this->background ?? null,
            'outgoing_message_fill'         => $this->outgoingMessageFill ?? null,
            'animate_outgoing_message_fill' => $this->animateOutgoingMessageFill,
            'outgoing_message_accent_color' => $this->outgoingMessageAccentColor,
        ];
    }
}

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
         * Theme accent color in ARGB format.
         */
        protected int             $accentColor,
        /**
         * If true, the freeform gradient fill needs to be animated on every sent message.
         */
        protected bool            $animateOutgoingMessageFill,
        /**
         * The background to be used in chats; may be null.
         */
        protected ?Background     $background,
        /**
         * Base theme for this theme.
         */
        protected BuiltInTheme    $baseTheme,
        /**
         * Accent color of outgoing messages in ARGB format.
         */
        protected int             $outgoingMessageAccentColor,
        /**
         * The fill to be used as a background for outgoing messages; may be null if the fill from the base theme must be used instead.
         */
        protected ?BackgroundFill $outgoingMessageFill,
    ) {}

    public static function fromArray(array $array): ThemeSettings
    {
        return new static(
            accentColor               : $array['accent_color'],
            animateOutgoingMessageFill: $array['animate_outgoing_message_fill'],
            background                : (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
            baseTheme                 : TdSchemaRegistry::fromArray($array['base_theme']),
            outgoingMessageAccentColor: $array['outgoing_message_accent_color'],
            outgoingMessageFill       : (isset($array['outgoing_message_fill']) ? TdSchemaRegistry::fromArray($array['outgoing_message_fill']) : null),
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
            'accent_color'                  => $this->accentColor,
            'animate_outgoing_message_fill' => $this->animateOutgoingMessageFill,
            'background'                    => (null !== $this->background ? $this->background->jsonSerialize() : null),
            'base_theme'                    => $this->baseTheme->jsonSerialize(),
            'outgoing_message_accent_color' => $this->outgoingMessageAccentColor,
            'outgoing_message_fill'         => (null !== $this->outgoingMessageFill ? $this->outgoingMessageFill->jsonSerialize() : null),
        ];
    }
}

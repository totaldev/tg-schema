<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Theme;

use Totaldev\TgSchema\Background\Background;
use Totaldev\TgSchema\Background\BackgroundFill;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes theme settings
 */
class ThemeSettings extends TdObject
{
    public const TYPE_NAME = 'themeSettings';

    /**
     * Theme accent color in ARGB format
     *
     * @var int
     */
    protected int $accentColor;

    /**
     * If true, the freeform gradient fill needs to be animated on every sent message
     *
     * @var bool
     */
    protected bool $animateOutgoingMessageFill;

    /**
     * The background to be used in chats; may be null
     *
     * @var Background|null
     */
    protected ?Background $background;

    /**
     * Accent color of outgoing messages in ARGB format
     *
     * @var int
     */
    protected int $outgoingMessageAccentColor;

    /**
     * The fill to be used as a background for outgoing messages
     *
     * @var BackgroundFill
     */
    protected BackgroundFill $outgoingMessageFill;

    public function __construct(
        int            $accentColor,
        ?Background    $background,
        BackgroundFill $outgoingMessageFill,
        bool           $animateOutgoingMessageFill,
        int            $outgoingMessageAccentColor,
    )
    {
        $this->accentColor = $accentColor;
        $this->background = $background;
        $this->outgoingMessageFill = $outgoingMessageFill;
        $this->animateOutgoingMessageFill = $animateOutgoingMessageFill;
        $this->outgoingMessageAccentColor = $outgoingMessageAccentColor;
    }

    public static function fromArray(array $array): ThemeSettings
    {
        return new static(
            $array['accent_color'],
            (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
            TdSchemaRegistry::fromArray($array['outgoing_message_fill']),
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

    public function getOutgoingMessageAccentColor(): int
    {
        return $this->outgoingMessageAccentColor;
    }

    public function getOutgoingMessageFill(): BackgroundFill
    {
        return $this->outgoingMessageFill;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'accent_color' => $this->accentColor,
            'background' => (isset($this->background) ? $this->background : null),
            'outgoing_message_fill' => $this->outgoingMessageFill->typeSerialize(),
            'animate_outgoing_message_fill' => $this->animateOutgoingMessageFill,
            'outgoing_message_accent_color' => $this->outgoingMessageAccentColor,
        ];
    }
}

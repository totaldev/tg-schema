<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a level of features for a message sent in a live story group call.
 */
class GroupCallMessageLevel extends TdObject
{
    public const string TYPE_NAME = 'groupCallMessageLevel';

    public function __construct(
        /**
         * Background color for the message the RGB format.
         */
        protected int $backgroundColor,
        /**
         * The first color used to show the message text in the RGB format.
         */
        protected int $firstColor,
        /**
         * The maximum allowed number of custom emoji in the message text.
         */
        protected int $maxCustomEmojiCount,
        /**
         * The maximum allowed length of the message text.
         */
        protected int $maxTextLength,
        /**
         * The minimum number of Telegram Stars required to get features of the level.
         */
        protected int $minStarCount,
        /**
         * The amount of time the message of this level will be pinned, in seconds.
         */
        protected int $pinDuration,
        /**
         * The second color used to show the message text in the RGB format.
         */
        protected int $secondColor,
    ) {}

    public static function fromArray(array $array): GroupCallMessageLevel
    {
        return new static(
            backgroundColor    : $array['background_color'],
            firstColor         : $array['first_color'],
            maxCustomEmojiCount: $array['max_custom_emoji_count'],
            maxTextLength      : $array['max_text_length'],
            minStarCount       : $array['min_star_count'],
            pinDuration        : $array['pin_duration'],
            secondColor        : $array['second_color'],
        );
    }

    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    public function getFirstColor(): int
    {
        return $this->firstColor;
    }

    public function getMaxCustomEmojiCount(): int
    {
        return $this->maxCustomEmojiCount;
    }

    public function getMaxTextLength(): int
    {
        return $this->maxTextLength;
    }

    public function getMinStarCount(): int
    {
        return $this->minStarCount;
    }

    public function getPinDuration(): int
    {
        return $this->pinDuration;
    }

    public function getSecondColor(): int
    {
        return $this->secondColor;
    }

    public function setBackgroundColor(int $value): static
    {
        $this->backgroundColor = $value;

        return $this;
    }

    public function setFirstColor(int $value): static
    {
        $this->firstColor = $value;

        return $this;
    }

    public function setMaxCustomEmojiCount(int $value): static
    {
        $this->maxCustomEmojiCount = $value;

        return $this;
    }

    public function setMaxTextLength(int $value): static
    {
        $this->maxTextLength = $value;

        return $this;
    }

    public function setMinStarCount(int $value): static
    {
        $this->minStarCount = $value;

        return $this;
    }

    public function setPinDuration(int $value): static
    {
        $this->pinDuration = $value;

        return $this;
    }

    public function setSecondColor(int $value): static
    {
        $this->secondColor = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'background_color'       => $this->backgroundColor,
            'first_color'            => $this->firstColor,
            'max_custom_emoji_count' => $this->maxCustomEmojiCount,
            'max_text_length'        => $this->maxTextLength,
            'min_star_count'         => $this->minStarCount,
            'pin_duration'           => $this->pinDuration,
            'second_color'           => $this->secondColor,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes a color to highlight a bot added to attachment menu
 */
class AttachmentMenuBotColor extends TdObject
{
    public const TYPE_NAME = 'attachmentMenuBotColor';

    /**
     * Color in the RGB24 format for light themes
     *
     * @var int
     */
    protected int $lightColor;

    /**
     * Color in the RGB24 format for dark themes
     *
     * @var int
     */
    protected int $darkColor;

    public function __construct(int $lightColor, int $darkColor)
    {
        $this->lightColor = $lightColor;
        $this->darkColor = $darkColor;
    }

    public static function fromArray(array $array): AttachmentMenuBotColor
    {
        return new static(
            $array['light_color'],
            $array['dark_color'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'light_color' => $this->lightColor,
            'dark_color' => $this->darkColor,
        ];
    }

    public function getLightColor(): int
    {
        return $this->lightColor;
    }

    public function getDarkColor(): int
    {
        return $this->darkColor;
    }
}

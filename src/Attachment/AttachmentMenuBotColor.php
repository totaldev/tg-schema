<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Attachment;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a color to highlight a bot added to attachment menu.
 */
class AttachmentMenuBotColor extends TdObject
{
    public const string TYPE_NAME = 'attachmentMenuBotColor';

    public function __construct(
        /**
         * Color in the RGB format for dark themes.
         */
        protected int $darkColor,
        /**
         * Color in the RGB format for light themes.
         */
        protected int $lightColor,
    ) {}

    public static function fromArray(array $array): AttachmentMenuBotColor
    {
        return new static(
            darkColor : $array['dark_color'],
            lightColor: $array['light_color'],
        );
    }

    public function getDarkColor(): int
    {
        return $this->darkColor;
    }

    public function getLightColor(): int
    {
        return $this->lightColor;
    }

    public function setDarkColor(int $value): static
    {
        $this->darkColor = $value;

        return $this;
    }

    public function setLightColor(int $value): static
    {
        $this->lightColor = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'dark_color'  => $this->darkColor,
            'light_color' => $this->lightColor,
        ];
    }
}

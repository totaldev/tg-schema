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
    public const TYPE_NAME = 'attachmentMenuBotColor';

    public function __construct(
        /**
         * Color in the RGB format for light themes.
         */
        protected int $lightColor,
        /**
         * Color in the RGB format for dark themes.
         */
        protected int $darkColor
    ) {}

    public static function fromArray(array $array): AttachmentMenuBotColor
    {
        return new static(
            $array['light_color'],
            $array['dark_color'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'light_color' => $this->lightColor,
            'dark_color'  => $this->darkColor,
        ];
    }
}

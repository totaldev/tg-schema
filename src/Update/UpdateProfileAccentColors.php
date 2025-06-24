<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Profile\ProfileAccentColor;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of supported accent colors for user profiles has changed.
 */
class UpdateProfileAccentColors extends Update
{
    public const TYPE_NAME = 'updateProfileAccentColors';

    public function __construct(
        /**
         * Information about supported colors.
         *
         * @var ProfileAccentColor[]
         */
        protected array $colors,
        /**
         * The list of accent color identifiers, which can be set through setProfileAccentColor and setChatProfileAccentColor. The colors must be shown in the specified order.
         *
         * @var int[]
         */
        protected array $availableAccentColorIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateProfileAccentColors
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['colors']),
            $array['available_accent_color_ids'],
        );
    }

    public function getAvailableAccentColorIds(): array
    {
        return $this->availableAccentColorIds;
    }

    public function getColors(): array
    {
        return $this->colors;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->colors),
            'available_accent_color_ids' => $this->availableAccentColorIds,
        ];
    }
}

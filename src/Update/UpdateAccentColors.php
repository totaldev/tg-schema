<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Accent\AccentColor;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of supported accent colors has changed.
 */
class UpdateAccentColors extends Update
{
    public const TYPE_NAME = 'updateAccentColors';

    public function __construct(
        /**
         * Information about supported colors; colors with identifiers 0 (red), 1 (orange), 2 (purple/violet), 3 (green), 4 (cyan), 5 (blue), 6 (pink) must always be supported and aren't included in the list. The exact colors for the accent colors with identifiers 0-6 must be taken from the app theme.
         *
         * @var AccentColor[]
         */
        protected array $colors,
        /**
         * The list of accent color identifiers, which can be set through setAccentColor and setChatAccentColor. The colors must be shown in the specified order.
         *
         * @var int[]
         */
        protected array $availableAccentColorIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAccentColors
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

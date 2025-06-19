<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Background\Background;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The default background has changed.
 */
class UpdateDefaultBackground extends Update
{
    public const TYPE_NAME = 'updateDefaultBackground';

    public function __construct(
        /**
         * True, if default background for dark theme has changed.
         */
        protected bool        $forDarkTheme,
        /**
         * The new default background; may be null.
         */
        protected ?Background $background
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDefaultBackground
    {
        return new static(
            $array['for_dark_theme'],
            isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null,
        );
    }

    public function getBackground(): ?Background
    {
        return $this->background;
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'for_dark_theme' => $this->forDarkTheme,
            'background'     => (isset($this->background) ? $this->background : null),
        ];
    }
}

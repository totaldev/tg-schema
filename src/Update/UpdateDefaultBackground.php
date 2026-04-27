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
    public const string TYPE_NAME = 'updateDefaultBackground';

    public function __construct(
        /**
         * The new default background; may be null.
         */
        protected ?Background $background,
        /**
         * True, if default background for dark theme has changed.
         */
        protected bool        $forDarkTheme,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDefaultBackground
    {
        return new static(
            background  : (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
            forDarkTheme: $array['for_dark_theme'],
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

    public function setBackground(?Background $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setForDarkTheme(bool $value): static
    {
        $this->forDarkTheme = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'background'     => (null !== $this->background ? $this->background->jsonSerialize() : null),
            'for_dark_theme' => $this->forDarkTheme,
        ];
    }
}

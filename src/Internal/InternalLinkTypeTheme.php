<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a cloud theme. TDLib has no theme support yet.
 */
class InternalLinkTypeTheme extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeTheme';

    public function __construct(
        /**
         * Name of the theme.
         */
        protected string $themeName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeTheme
    {
        return new static(
            themeName: $array['theme_name'],
        );
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function setThemeName(string $value): static
    {
        $this->themeName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'theme_name' => $this->themeName,
        ];
    }
}

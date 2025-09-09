<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns backgrounds installed by the user.
 */
class GetInstalledBackgrounds extends TdFunction
{
    public const TYPE_NAME = 'getInstalledBackgrounds';

    public function __construct(
        /**
         * Pass true to order returned backgrounds for a dark theme.
         */
        protected bool $forDarkTheme
    ) {}

    public static function fromArray(array $array): GetInstalledBackgrounds
    {
        return new static(
            $array['for_dark_theme'],
        );
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
        ];
    }
}

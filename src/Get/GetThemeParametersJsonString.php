<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

/**
 * Converts a themeParameters object to corresponding JSON-serialized string. Can be called synchronously.
 */
class GetThemeParametersJsonString extends TdFunction
{
    public const TYPE_NAME = 'getThemeParametersJsonString';

    public function __construct(
        /**
         * Theme parameters to convert to JSON.
         */
        protected ThemeParameters $theme
    ) {}

    public static function fromArray(array $array): GetThemeParametersJsonString
    {
        return new static(
            TdSchemaRegistry::fromArray($array['theme']),
        );
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'theme' => $this->theme->typeSerialize(),
        ];
    }
}

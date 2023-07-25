<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Converts a themeParameters object to corresponding JSON-serialized string. Can be called synchronously
 */
class GetThemeParametersJsonString extends TdFunction
{
    public const TYPE_NAME = 'getThemeParametersJsonString';

    /**
     * Theme parameters to convert to JSON
     *
     * @var ThemeParameters
     */
    protected ThemeParameters $theme;

    public function __construct(ThemeParameters $theme)
    {
        $this->theme = $theme;
    }

    public static function fromArray(array $array): GetThemeParametersJsonString
    {
        return new static(
            TdSchemaRegistry::fromArray($array['theme']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'theme' => $this->theme->typeSerialize(),
        ];
    }

    public function getTheme(): ThemeParameters
    {
        return $this->theme;
    }
}

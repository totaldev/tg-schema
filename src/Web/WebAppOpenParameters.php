<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeParameters;

/**
 * Options to be used when a Web App is opened.
 */
class WebAppOpenParameters extends TdObject
{
    public const TYPE_NAME = 'webAppOpenParameters';

    public function __construct(
        /**
         * Short name of the current application; 0-64 English letters, digits, and underscores.
         */
        protected string           $applicationName,
        /**
         * Preferred Web App theme; pass null to use the default theme.
         */
        protected ?ThemeParameters $theme = null,
        /**
         * The mode in which the Web App is opened; pass null to open in webAppOpenModeFullSize.
         */
        protected ?WebAppOpenMode  $mode = null,
    ) {}

    public static function fromArray(array $array): WebAppOpenParameters
    {
        return new static(
            isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null,
            $array['application_name'],
            isset($array['mode']) ? TdSchemaRegistry::fromArray($array['mode']) : null,
        );
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getMode(): ?WebAppOpenMode
    {
        return $this->mode;
    }

    public function getTheme(): ?ThemeParameters
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'theme'            => $this->theme ?? null,
            'application_name' => $this->applicationName,
            'mode'             => $this->mode ?? null,
        ];
    }
}

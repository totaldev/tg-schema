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
    public const string TYPE_NAME = 'webAppOpenParameters';

    public function __construct(
        /**
         * Short name of the current application; 0-64 English letters, digits, and underscores.
         */
        protected string           $applicationName,
        /**
         * The mode in which the Web App is opened; pass null to open in webAppOpenModeFullSize.
         */
        protected ?WebAppOpenMode  $mode = null,
        /**
         * Preferred Web App theme; pass null to use the default theme.
         */
        protected ?ThemeParameters $theme = null,
    ) {}

    public static function fromArray(array $array): WebAppOpenParameters
    {
        return new static(
            applicationName: $array['application_name'],
            mode           : (isset($array['mode']) ? TdSchemaRegistry::fromArray($array['mode']) : null),
            theme          : (isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null),
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

    public function setApplicationName(string $value): static
    {
        $this->applicationName = $value;

        return $this;
    }

    public function setMode(?WebAppOpenMode $value): static
    {
        $this->mode = $value;

        return $this;
    }

    public function setTheme(?ThemeParameters $value): static
    {
        $this->theme = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'application_name' => $this->applicationName,
            'mode'             => (null !== $this->mode ? $this->mode->jsonSerialize() : null),
            'theme'            => (null !== $this->theme ? $this->theme->jsonSerialize() : null),
        ];
    }
}

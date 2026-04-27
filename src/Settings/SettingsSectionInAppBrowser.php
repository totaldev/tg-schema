<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The in-app browser settings section.
 */
class SettingsSectionInAppBrowser extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionInAppBrowser';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "enable-browser", "clear-cookies", "clear-cache", "history", "clear-history", "never-open", "clear-list", "search".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionInAppBrowser
    {
        return new static(
            subsection: $array['subsection'],
        );
    }

    public function getSubsection(): string
    {
        return $this->subsection;
    }

    public function setSubsection(string $value): static
    {
        $this->subsection = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'subsection' => $this->subsection,
        ];
    }
}

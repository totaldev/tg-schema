<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The application language section.
 */
class SettingsSectionLanguage extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionLanguage';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "show-button" for Show Translate Button toggle, "translate-chats" for Translate Entire Chats toggle, "do-not-translate" - for Do Not Translate language list.
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionLanguage
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

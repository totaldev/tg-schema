<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The "Telegram Business" section.
 */
class SettingsSectionBusiness extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionBusiness';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "do-not-hide-ads".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionBusiness
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

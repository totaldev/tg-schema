<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The Devices section.
 */
class SettingsSectionDevices extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionDevices';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "edit", "link-desktop", "terminate-sessions", "auto-terminate".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionDevices
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

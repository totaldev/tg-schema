<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The power saving settings section.
 */
class SettingsSectionPowerSaving extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionPowerSaving';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "videos", "gifs", "stickers", "emoji", "effects", "preload", "background", "call-animations", "particles", "transitions".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionPowerSaving
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

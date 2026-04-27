<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The Telegram Star balance and transaction section.
 */
class SettingsSectionMyStars extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionMyStars';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "top-up", "stats", "gift", "earn".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionMyStars
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

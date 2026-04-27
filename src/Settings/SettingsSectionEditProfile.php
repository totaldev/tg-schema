<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The profile edit section.
 */
class SettingsSectionEditProfile extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionEditProfile';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "set-photo", "first-name", "last-name", "emoji-status", "bio", "birthday", "change-number", "username", "your-color", "channel", "add-account", "log-out", "profile-color/profile", "profile-color/profile/add-icons", "profile-color/profile/use-gift", "profile-color/name", "profile-color/name/add-icons", "profile-color/name/use-gift", "profile-photo/use-emoji".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionEditProfile
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

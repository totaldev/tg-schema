<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Settings;

/**
 * The appearance section.
 */
class SettingsSectionAppearance extends SettingsSection
{
    public const string TYPE_NAME = 'settingsSectionAppearance';

    public function __construct(
        /**
         * Subsection of the section; may be one of "", "themes", "themes/edit", "themes/create", "wallpapers", "wallpapers/edit", "wallpapers/set", "wallpapers/choose-photo", "your-color/profile", "your-color/profile/add-icons", "your-color/profile/use-gift", "your-color/profile/reset", "your-color/name", "your-color/name/add-icons", "your-color/name/use-gift", "night-mode", "auto-night-mode", "text-size", "text-size/use-system", "message-corners", "animations", "stickers-and-emoji", "stickers-and-emoji/edit", "stickers-and-emoji/trending", "stickers-and-emoji/archived", "stickers-and-emoji/archived/edit", "stickers-and-emoji/emoji", "stickers-and-emoji/emoji/edit", "stickers-and-emoji/emoji/archived", "stickers-and-emoji/emoji/archived/edit", "stickers-and-emoji/emoji/suggest", "stickers-and-emoji/emoji/quick-reaction", "stickers-and-emoji/emoji/quick-reaction/choose", "stickers-and-emoji/suggest-by-emoji", "stickers-and-emoji/large-emoji", "stickers-and-emoji/dynamic-order", "stickers-and-emoji/emoji/show-more", "app-icon", "tap-for-next-media".
         */
        protected string $subsection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SettingsSectionAppearance
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

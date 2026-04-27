<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Settings\SettingsSection;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to application settings.
 */
class InternalLinkTypeSettings extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeSettings';

    public function __construct(
        /**
         * Section of the application settings to open; may be null if none.
         */
        protected ?SettingsSection $section
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeSettings
    {
        return new static(
            section: (isset($array['section']) ? TdSchemaRegistry::fromArray($array['section']) : null),
        );
    }

    public function getSection(): ?SettingsSection
    {
        return $this->section;
    }

    public function setSection(?SettingsSection $value): static
    {
        $this->section = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'section' => (null !== $this->section ? $this->section->jsonSerialize() : null),
        ];
    }
}

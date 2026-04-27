<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auto;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains auto-download settings presets for the current user.
 */
class AutoDownloadSettingsPresets extends TdObject
{
    public const string TYPE_NAME = 'autoDownloadSettingsPresets';

    public function __construct(
        /**
         * Preset with highest settings; expected to be used by default when connected on Wi-Fi.
         */
        protected AutoDownloadSettings $high,
        /**
         * Preset with lowest settings; expected to be used by default when roaming.
         */
        protected AutoDownloadSettings $low,
        /**
         * Preset with medium settings; expected to be used by default when using mobile data.
         */
        protected AutoDownloadSettings $medium,
    ) {}

    public static function fromArray(array $array): AutoDownloadSettingsPresets
    {
        return new static(
            high  : TdSchemaRegistry::fromArray($array['high']),
            low   : TdSchemaRegistry::fromArray($array['low']),
            medium: TdSchemaRegistry::fromArray($array['medium']),
        );
    }

    public function getHigh(): AutoDownloadSettings
    {
        return $this->high;
    }

    public function getLow(): AutoDownloadSettings
    {
        return $this->low;
    }

    public function getMedium(): AutoDownloadSettings
    {
        return $this->medium;
    }

    public function setHigh(AutoDownloadSettings $value): static
    {
        $this->high = $value;

        return $this;
    }

    public function setLow(AutoDownloadSettings $value): static
    {
        $this->low = $value;

        return $this;
    }

    public function setMedium(AutoDownloadSettings $value): static
    {
        $this->medium = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'high'   => $this->high->jsonSerialize(),
            'low'    => $this->low->jsonSerialize(),
            'medium' => $this->medium->jsonSerialize(),
        ];
    }
}

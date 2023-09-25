<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auto;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains auto-download settings presets for the current user
 */
class AutoDownloadSettingsPresets extends TdObject
{
    public const TYPE_NAME = 'autoDownloadSettingsPresets';

    /**
     * Preset with highest settings; supposed to be used by default when connected on Wi-Fi
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $high;

    /**
     * Preset with lowest settings; supposed to be used by default when roaming
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $low;

    /**
     * Preset with medium settings; supposed to be used by default when using mobile data
     *
     * @var AutoDownloadSettings
     */
    protected AutoDownloadSettings $medium;

    public function __construct(AutoDownloadSettings $low, AutoDownloadSettings $medium, AutoDownloadSettings $high)
    {
        $this->low = $low;
        $this->medium = $medium;
        $this->high = $high;
    }

    public static function fromArray(array $array): AutoDownloadSettingsPresets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['low']),
            TdSchemaRegistry::fromArray($array['medium']),
            TdSchemaRegistry::fromArray($array['high']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'low' => $this->low->typeSerialize(),
            'medium' => $this->medium->typeSerialize(),
            'high' => $this->high->typeSerialize(),
        ];
    }
}

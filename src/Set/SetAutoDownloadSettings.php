<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Auto\AutoDownloadSettings;
use Totaldev\TgSchema\Network\NetworkType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets auto-download settings.
 */
class SetAutoDownloadSettings extends TdFunction
{
    public const TYPE_NAME = 'setAutoDownloadSettings';

    public function __construct(
        /**
         * New user auto-download settings.
         */
        protected AutoDownloadSettings $settings,
        /**
         * Type of the network for which the new settings are relevant.
         */
        protected NetworkType          $type,
    ) {}

    public static function fromArray(array $array): SetAutoDownloadSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['settings']),
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getSettings(): AutoDownloadSettings
    {
        return $this->settings;
    }

    public function getType(): NetworkType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'settings' => $this->settings->typeSerialize(),
            'type'     => $this->type->typeSerialize(),
        ];
    }
}

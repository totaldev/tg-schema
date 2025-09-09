<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Read\ReadDatePrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes privacy settings for message read date.
 */
class SetReadDatePrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'setReadDatePrivacySettings';

    public function __construct(
        /**
         * New settings.
         */
        protected ReadDatePrivacySettings $settings
    ) {}

    public static function fromArray(array $array): SetReadDatePrivacySettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getSettings(): ReadDatePrivacySettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'settings' => $this->settings->typeSerialize(),
        ];
    }
}

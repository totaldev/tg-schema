<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Gift\GiftSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes settings for gift receiving for the current user.
 */
class SetGiftSettings extends TdFunction
{
    public const TYPE_NAME = 'setGiftSettings';

    public function __construct(
        /**
         * The new settings.
         */
        protected GiftSettings $settings
    ) {}

    public static function fromArray(array $array): SetGiftSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getSettings(): GiftSettings
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

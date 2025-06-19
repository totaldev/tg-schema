<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Gift\GiftSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes settings for gift receiving of a business account; for bots only.
 */
class SetBusinessAccountGiftSettings extends TdFunction
{
    public const TYPE_NAME = 'setBusinessAccountGiftSettings';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string       $businessConnectionId,
        /**
         * The new settings.
         */
        protected GiftSettings $settings
    ) {}

    public static function fromArray(array $array): SetBusinessAccountGiftSettings
    {
        return new static(
            $array['business_connection_id'],
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getSettings(): GiftSettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'settings'               => $this->settings->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Business\BusinessAwayMessageSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the business away message settings of the current user. Requires Telegram Business subscription.
 */
class SetBusinessAwayMessageSettings extends TdFunction
{
    public const TYPE_NAME = 'setBusinessAwayMessageSettings';

    public function __construct(
        /**
         * The new settings for the away message of the business; pass null to disable the away message.
         */
        protected BusinessAwayMessageSettings $awayMessageSettings
    ) {}

    public static function fromArray(array $array): SetBusinessAwayMessageSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['away_message_settings']),
        );
    }

    public function getAwayMessageSettings(): BusinessAwayMessageSettings
    {
        return $this->awayMessageSettings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'away_message_settings' => $this->awayMessageSettings->typeSerialize(),
        ];
    }
}

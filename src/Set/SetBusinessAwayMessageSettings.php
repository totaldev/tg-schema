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
    public const string TYPE_NAME = 'setBusinessAwayMessageSettings';

    public function __construct(
        /**
         * The new settings for the away message of the business; pass null to disable the away message.
         */
        protected ?BusinessAwayMessageSettings $awayMessageSettings = null
    ) {}

    public static function fromArray(array $array): SetBusinessAwayMessageSettings
    {
        return new static(
            isset($array['away_message_settings']) ? TdSchemaRegistry::fromArray($array['away_message_settings']) : null,
        );
    }

    public function getAwayMessageSettings(): ?BusinessAwayMessageSettings
    {
        return $this->awayMessageSettings;
    }

    public function setAwayMessageSettings(?BusinessAwayMessageSettings $value): static
    {
        $this->awayMessageSettings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'away_message_settings' => $this->awayMessageSettings ?? null,
        ];
    }
}

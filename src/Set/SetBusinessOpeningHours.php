<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Business\BusinessOpeningHours;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the business opening hours of the current user. Requires Telegram Business subscription.
 */
class SetBusinessOpeningHours extends TdFunction
{
    public const TYPE_NAME = 'setBusinessOpeningHours';

    public function __construct(
        /**
         * The new opening hours of the business; pass null to remove the opening hours; up to 28 time intervals can be specified.
         */
        protected BusinessOpeningHours $openingHours
    ) {}

    public static function fromArray(array $array): SetBusinessOpeningHours
    {
        return new static(
            TdSchemaRegistry::fromArray($array['opening_hours']),
        );
    }

    public function getOpeningHours(): BusinessOpeningHours
    {
        return $this->openingHours;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'opening_hours' => $this->openingHours->typeSerialize(),
        ];
    }
}

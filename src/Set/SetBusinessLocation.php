<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Business\BusinessLocation;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the business location of the current user. Requires Telegram Business subscription.
 */
class SetBusinessLocation extends TdFunction
{
    public const TYPE_NAME = 'setBusinessLocation';

    public function __construct(
        /**
         * The new location of the business; pass null to remove the location.
         */
        protected ?BusinessLocation $location = null
    ) {}

    public static function fromArray(array $array): SetBusinessLocation
    {
        return new static(
            isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null,
        );
    }

    public function getLocation(): ?BusinessLocation
    {
        return $this->location;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location ?? null,
        ];
    }
}

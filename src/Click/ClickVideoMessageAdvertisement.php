<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Click;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user clicked a video message advertisement.
 */
class ClickVideoMessageAdvertisement extends TdFunction
{
    public const string TYPE_NAME = 'clickVideoMessageAdvertisement';

    public function __construct(
        /**
         * Unique identifier of the advertisement.
         */
        protected int $advertisementUniqueId
    ) {}

    public static function fromArray(array $array): ClickVideoMessageAdvertisement
    {
        return new static(
            advertisementUniqueId: $array['advertisement_unique_id'],
        );
    }

    public function getAdvertisementUniqueId(): int
    {
        return $this->advertisementUniqueId;
    }

    public function setAdvertisementUniqueId(int $value): static
    {
        $this->advertisementUniqueId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'advertisement_unique_id' => $this->advertisementUniqueId,
        ];
    }
}

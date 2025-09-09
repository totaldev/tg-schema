<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\View;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user viewed a video message advertisement.
 */
class ViewVideoMessageAdvertisement extends TdFunction
{
    public const TYPE_NAME = 'viewVideoMessageAdvertisement';

    public function __construct(
        /**
         * Unique identifier of the advertisement.
         */
        protected int $advertisementUniqueId
    ) {}

    public static function fromArray(array $array): ViewVideoMessageAdvertisement
    {
        return new static(
            $array['advertisement_unique_id'],
        );
    }

    public function getAdvertisementUniqueId(): int
    {
        return $this->advertisementUniqueId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'advertisement_unique_id' => $this->advertisementUniqueId,
        ];
    }
}

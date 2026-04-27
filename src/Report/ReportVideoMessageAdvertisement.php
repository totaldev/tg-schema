<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a video message advertisement to Telegram moderators.
 */
class ReportVideoMessageAdvertisement extends TdFunction
{
    public const string TYPE_NAME = 'reportVideoMessageAdvertisement';

    public function __construct(
        /**
         * Unique identifier of the advertisement.
         */
        protected int    $advertisementUniqueId,
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
    ) {}

    public static function fromArray(array $array): ReportVideoMessageAdvertisement
    {
        return new static(
            advertisementUniqueId: $array['advertisement_unique_id'],
            optionId             : $array['option_id'],
        );
    }

    public function getAdvertisementUniqueId(): int
    {
        return $this->advertisementUniqueId;
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function setAdvertisementUniqueId(int $value): static
    {
        $this->advertisementUniqueId = $value;

        return $this;
    }

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'advertisement_unique_id' => $this->advertisementUniqueId,
            'option_id'               => $this->optionId,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Suggested\SuggestedPostPrice;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a post to suggest.
 */
class InputSuggestedPostInfo extends TdObject
{
    public const string TYPE_NAME = 'inputSuggestedPostInfo';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the post is expected to be published; pass 0 if the date isn't restricted. If specified, then the date must be getOption("suggested_post_send_delay_min")-getOption("suggested_post_send_delay_max") seconds in the future.
         */
        protected int                 $sendDate,
        /**
         * Price of the suggested post; pass null to suggest a post without payment. If the current user isn't an administrator of the channel direct messages chat and has no enough funds to pay for the post, then the error "BALANCE_TOO_LOW" will be returned immediately.
         */
        protected ?SuggestedPostPrice $price = null,
    ) {}

    public static function fromArray(array $array): InputSuggestedPostInfo
    {
        return new static(
            isset($array['price']) ? TdSchemaRegistry::fromArray($array['price']) : null,
            $array['send_date'],
        );
    }

    public function getPrice(): ?SuggestedPostPrice
    {
        return $this->price;
    }

    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    public function setPrice(?SuggestedPostPrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function setSendDate(int $value): static
    {
        $this->sendDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'price'     => $this->price ?? null,
            'send_date' => $this->sendDate,
        ];
    }
}

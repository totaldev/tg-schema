<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Suggested\SuggestedPostPrice;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A suggested post was approved.
 */
class MessageSuggestedPostApproved extends MessageContent
{
    public const string TYPE_NAME = 'messageSuggestedPostApproved';

    public function __construct(
        /**
         * Price of the suggested post; may be null if the post is non-paid.
         */
        protected ?SuggestedPostPrice $price,
        /**
         * Point in time (Unix timestamp) when the post is expected to be published.
         */
        protected int                 $sendDate,
        /**
         * Identifier of the message with the suggested post; can be 0 if the message was deleted.
         */
        protected int                 $suggestedPostMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostApproved
    {
        return new static(
            price                 : (isset($array['price']) ? TdSchemaRegistry::fromArray($array['price']) : null),
            sendDate              : $array['send_date'],
            suggestedPostMessageId: $array['suggested_post_message_id'],
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

    public function getSuggestedPostMessageId(): int
    {
        return $this->suggestedPostMessageId;
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

    public function setSuggestedPostMessageId(int $value): static
    {
        $this->suggestedPostMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'price'                     => (null !== $this->price ? $this->price->jsonSerialize() : null),
            'send_date'                 => $this->sendDate,
            'suggested_post_message_id' => $this->suggestedPostMessageId,
        ];
    }
}

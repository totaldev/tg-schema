<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Suggested\SuggestedPostPrice;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Approval of suggested post has failed, because the user which proposed the post had no enough funds.
 */
class MessageSuggestedPostApprovalFailed extends MessageContent
{
    public const string TYPE_NAME = 'messageSuggestedPostApprovalFailed';

    public function __construct(
        /**
         * Price of the suggested post.
         */
        protected SuggestedPostPrice $price,
        /**
         * Identifier of the message with the suggested post; may be 0 or an identifier of a deleted message.
         */
        protected int                $suggestedPostMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostApprovalFailed
    {
        return new static(
            price                 : TdSchemaRegistry::fromArray($array['price']),
            suggestedPostMessageId: $array['suggested_post_message_id'],
        );
    }

    public function getPrice(): SuggestedPostPrice
    {
        return $this->price;
    }

    public function getSuggestedPostMessageId(): int
    {
        return $this->suggestedPostMessageId;
    }

    public function setPrice(SuggestedPostPrice $value): static
    {
        $this->price = $value;

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
            'price'                     => $this->price->jsonSerialize(),
            'suggested_post_message_id' => $this->suggestedPostMessageId,
        ];
    }
}

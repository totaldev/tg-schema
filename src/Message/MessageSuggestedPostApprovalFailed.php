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
         * Identifier of the message with the suggested post; can be 0 if the message was deleted.
         */
        protected int                $suggestedPostMessageId,
        /**
         * Price of the suggested post.
         */
        protected SuggestedPostPrice $price,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostApprovalFailed
    {
        return new static(
            $array['suggested_post_message_id'],
            TdSchemaRegistry::fromArray($array['price']),
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
            'suggested_post_message_id' => $this->suggestedPostMessageId,
            'price'                     => $this->price->typeSerialize(),
        ];
    }
}

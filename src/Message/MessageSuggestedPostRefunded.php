<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Suggested\SuggestedPostRefundReason;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A suggested post was refunded.
 */
class MessageSuggestedPostRefunded extends MessageContent
{
    public const string TYPE_NAME = 'messageSuggestedPostRefunded';

    public function __construct(
        /**
         * Reason of the refund.
         */
        protected SuggestedPostRefundReason $reason,
        /**
         * Identifier of the message with the suggested post; may be 0 or an identifier of a deleted message.
         */
        protected int                       $suggestedPostMessageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostRefunded
    {
        return new static(
            reason                : TdSchemaRegistry::fromArray($array['reason']),
            suggestedPostMessageId: $array['suggested_post_message_id'],
        );
    }

    public function getReason(): SuggestedPostRefundReason
    {
        return $this->reason;
    }

    public function getSuggestedPostMessageId(): int
    {
        return $this->suggestedPostMessageId;
    }

    public function setReason(SuggestedPostRefundReason $value): static
    {
        $this->reason = $value;

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
            'reason'                    => $this->reason->jsonSerialize(),
            'suggested_post_message_id' => $this->suggestedPostMessageId,
        ];
    }
}

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
         * Identifier of the message with the suggested post; can be 0 if the message was deleted.
         */
        protected int                       $suggestedPostMessageId,
        /**
         * Reason of the refund.
         */
        protected SuggestedPostRefundReason $reason,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostRefunded
    {
        return new static(
            $array['suggested_post_message_id'],
            TdSchemaRegistry::fromArray($array['reason']),
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
            'suggested_post_message_id' => $this->suggestedPostMessageId,
            'reason'                    => $this->reason->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The user can be messaged, but the messages are paid.
 */
class CanSendMessageToUserResultUserHasPaidMessages extends CanSendMessageToUserResult
{
    public const TYPE_NAME = 'canSendMessageToUserResultUserHasPaidMessages';

    public function __construct(
        /**
         * Number of Telegram Stars that must be paid by the current user for each sent message to the user.
         */
        protected int $outgoingPaidMessageStarCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendMessageToUserResultUserHasPaidMessages
    {
        return new static(
            $array['outgoing_paid_message_star_count'],
        );
    }

    public function getOutgoingPaidMessageStarCount(): int
    {
        return $this->outgoingPaidMessageStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'outgoing_paid_message_star_count' => $this->outgoingPaidMessageStarCount,
        ];
    }
}

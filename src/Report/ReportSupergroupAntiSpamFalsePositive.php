<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a false deletion of a message by aggressive anti-spam checks; requires administrator rights in the supergroup. Can be called only for messages from
 * chatEventMessageDeleted with can_report_anti_spam_false_positive == true.
 */
class ReportSupergroupAntiSpamFalsePositive extends TdFunction
{
    public const string TYPE_NAME = 'reportSupergroupAntiSpamFalsePositive';

    public function __construct(
        /**
         * Supergroup identifier.
         */
        protected int $supergroupId,
        /**
         * Identifier of the erroneously deleted message from chatEventMessageDeleted.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): ReportSupergroupAntiSpamFalsePositive
    {
        return new static(
            $array['supergroup_id'],
            $array['message_id'],
        );
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'message_id'    => $this->messageId,
        ];
    }
}

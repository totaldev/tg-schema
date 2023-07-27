<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a false deletion of a message by aggressive anti-spam checks; requires administrator rights in the supergroup. Can be called only for messages from chatEventMessageDeleted with can_report_anti_spam_false_positive == true
 */
class ReportSupergroupAntiSpamFalsePositive extends TdFunction
{
    public const TYPE_NAME = 'reportSupergroupAntiSpamFalsePositive';

    /**
     * Supergroup identifier
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * Identifier of the erroneously deleted message
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $supergroupId, int $messageId)
    {
        $this->supergroupId = $supergroupId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): ReportSupergroupAntiSpamFalsePositive
    {
        return new static(
            $array['supergroup_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'message_id' => $this->messageId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}

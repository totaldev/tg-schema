<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message was deleted
 */
class ChatEventMessageDeleted extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageDeleted';

    /**
     * Deleted message
     *
     * @var Message
     */
    protected Message $message;

    /**
     * True, if the message deletion can be reported via reportSupergroupAntiSpamFalsePositive
     *
     * @var bool
     */
    protected bool $canReportAntiSpamFalsePositive;

    public function __construct(Message $message, bool $canReportAntiSpamFalsePositive)
    {
        parent::__construct();

        $this->message = $message;
        $this->canReportAntiSpamFalsePositive = $canReportAntiSpamFalsePositive;
    }

    public static function fromArray(array $array): ChatEventMessageDeleted
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['can_report_anti_spam_false_positive'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message' => $this->message->typeSerialize(),
            'can_report_anti_spam_false_positive' => $this->canReportAntiSpamFalsePositive,
        ];
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getCanReportAntiSpamFalsePositive(): bool
    {
        return $this->canReportAntiSpamFalsePositive;
    }
}

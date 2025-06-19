<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message was deleted.
 */
class ChatEventMessageDeleted extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageDeleted';

    public function __construct(
        /**
         * Deleted message.
         */
        protected Message $message,
        /**
         * True, if the message deletion can be reported via reportSupergroupAntiSpamFalsePositive.
         */
        protected bool    $canReportAntiSpamFalsePositive
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMessageDeleted
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['can_report_anti_spam_false_positive'],
        );
    }

    public function getCanReportAntiSpamFalsePositive(): bool
    {
        return $this->canReportAntiSpamFalsePositive;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                               => static::TYPE_NAME,
            'message'                             => $this->message->typeSerialize(),
            'can_report_anti_spam_false_positive' => $this->canReportAntiSpamFalsePositive,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message failed to be sent.
 */
class MessageSendingStateFailed extends MessageSendingState
{
    public const TYPE_NAME = 'messageSendingStateFailed';

    public function __construct(
        /**
         * The cause of the message sending failure.
         */
        protected Error $error,
        /**
         * True, if the message can be re-sent using resendMessages or readdQuickReplyShortcutMessages.
         */
        protected bool  $canRetry,
        /**
         * True, if the message can be re-sent only on behalf of a different sender.
         */
        protected bool  $needAnotherSender,
        /**
         * True, if the message can be re-sent only if another quote is chosen in the message that is replied by the given message.
         */
        protected bool  $needAnotherReplyQuote,
        /**
         * True, if the message can be re-sent only if the message to be replied is removed. This will be done automatically by resendMessages.
         */
        protected bool  $needDropReply,
        /**
         * The number of Telegram Stars that must be paid to send the message; 0 if the current amount is correct.
         */
        protected int   $requiredPaidMessageStarCount,
        /**
         * Time left before the message can be re-sent, in seconds. No update is sent when this field changes.
         */
        protected float $retryAfter,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSendingStateFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['error']),
            $array['can_retry'],
            $array['need_another_sender'],
            $array['need_another_reply_quote'],
            $array['need_drop_reply'],
            $array['required_paid_message_star_count'],
            $array['retry_after'],
        );
    }

    public function getCanRetry(): bool
    {
        return $this->canRetry;
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function getNeedAnotherReplyQuote(): bool
    {
        return $this->needAnotherReplyQuote;
    }

    public function getNeedAnotherSender(): bool
    {
        return $this->needAnotherSender;
    }

    public function getNeedDropReply(): bool
    {
        return $this->needDropReply;
    }

    public function getRequiredPaidMessageStarCount(): int
    {
        return $this->requiredPaidMessageStarCount;
    }

    public function getRetryAfter(): float
    {
        return $this->retryAfter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'error'                            => $this->error->typeSerialize(),
            'can_retry'                        => $this->canRetry,
            'need_another_sender'              => $this->needAnotherSender,
            'need_another_reply_quote'         => $this->needAnotherReplyQuote,
            'need_drop_reply'                  => $this->needDropReply,
            'required_paid_message_star_count' => $this->requiredPaidMessageStarCount,
            'retry_after'                      => $this->retryAfter,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message failed to be sent
 */
class MessageSendingStateFailed extends MessageSendingState
{
    public const TYPE_NAME = 'messageSendingStateFailed';

    /**
     * The cause of the message sending failure
     *
     * @var Error
     */
    protected Error $error;

    /**
     * True, if the message can be re-sent
     *
     * @var bool
     */
    protected bool $canRetry;

    /**
     * True, if the message can be re-sent only on behalf of a different sender
     *
     * @var bool
     */
    protected bool $needAnotherSender;

    /**
     * Time left before the message can be re-sent, in seconds. No update is sent when this field changes
     *
     * @var float
     */
    protected float $retryAfter;

    public function __construct(Error $error, bool $canRetry, bool $needAnotherSender, float $retryAfter)
    {
        parent::__construct();

        $this->error = $error;
        $this->canRetry = $canRetry;
        $this->needAnotherSender = $needAnotherSender;
        $this->retryAfter = $retryAfter;
    }

    public static function fromArray(array $array): MessageSendingStateFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['error']),
            $array['can_retry'],
            $array['need_another_sender'],
            $array['retry_after'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error' => $this->error->typeSerialize(),
            'can_retry' => $this->canRetry,
            'need_another_sender' => $this->needAnotherSender,
            'retry_after' => $this->retryAfter,
        ];
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function getCanRetry(): bool
    {
        return $this->canRetry;
    }

    public function getNeedAnotherSender(): bool
    {
        return $this->needAnotherSender;
    }

    public function getRetryAfter(): float
    {
        return $this->retryAfter;
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message will be sent when the video in the message is converted and optimized; can be used only by the server.
 */
class MessageSchedulingStateSendWhenVideoProcessed extends MessageSchedulingState
{
    public const TYPE_NAME = 'messageSchedulingStateSendWhenVideoProcessed';

    public function __construct(
        /**
         * Approximate point in time (Unix timestamp) when the message is expected to be sent.
         */
        protected int $sendDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSchedulingStateSendWhenVideoProcessed
    {
        return new static(
            $array['send_date'],
        );
    }

    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'send_date' => $this->sendDate,
        ];
    }
}

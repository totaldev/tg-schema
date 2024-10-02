<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message will be sent at the specified date.
 */
class MessageSchedulingStateSendAtDate extends MessageSchedulingState
{
    public const TYPE_NAME = 'messageSchedulingStateSendAtDate';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the message will be sent. The date must be within 367 days in the future.
         */
        protected int $sendDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSchedulingStateSendAtDate
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

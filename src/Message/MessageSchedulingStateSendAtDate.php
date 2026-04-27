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
    public const string TYPE_NAME = 'messageSchedulingStateSendAtDate';

    public function __construct(
        /**
         * Period after which the message will be sent again; in seconds; 0 if never; for Telegram Premium users only; may be non-zero only in sendMessage and forwardMessages with one message requests; must be one of 0, 86400, 7 * 86400, 14 * 86400, 30 * 86400, 91 * 86400, 182 * 86400, 365 * 86400, or additionally 60, or 300 in the Test DC.
         */
        protected int $repeatPeriod,
        /**
         * Point in time (Unix timestamp) when the message will be sent. The date must be within 367 days in the future.
         */
        protected int $sendDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSchedulingStateSendAtDate
    {
        return new static(
            repeatPeriod: $array['repeat_period'],
            sendDate    : $array['send_date'],
        );
    }

    public function getRepeatPeriod(): int
    {
        return $this->repeatPeriod;
    }

    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    public function setRepeatPeriod(int $value): static
    {
        $this->repeatPeriod = $value;

        return $this;
    }

    public function setSendDate(int $value): static
    {
        $this->sendDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'repeat_period' => $this->repeatPeriod,
            'send_date'     => $this->sendDate,
        ];
    }
}

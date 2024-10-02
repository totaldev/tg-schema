<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The monthly limit for the number of posted stories exceeded. The user needs to buy Telegram Premium or wait specified time.
 */
class CanSendStoryResultMonthlyLimitExceeded extends CanSendStoryResult
{
    public const TYPE_NAME = 'canSendStoryResultMonthlyLimitExceeded';

    public function __construct(
        /**
         * Time left before the user can send the next story.
         */
        protected int $retryAfter
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendStoryResultMonthlyLimitExceeded
    {
        return new static(
            $array['retry_after'],
        );
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'retry_after' => $this->retryAfter,
        ];
    }
}

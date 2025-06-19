<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The monthly limit for the number of posted stories exceeded. The user needs to buy Telegram Premium or wait specified time.
 */
class CanPostStoryResultMonthlyLimitExceeded extends CanPostStoryResult
{
    public const TYPE_NAME = 'canPostStoryResultMonthlyLimitExceeded';

    public function __construct(
        /**
         * Time left before the user can post the next story.
         */
        protected int $retryAfter
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanPostStoryResultMonthlyLimitExceeded
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

<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The monthly limit for the number of posted stories exceeded. The user needs to buy Telegram Premium or wait specified time
 */
class CanSendStoryResultMonthlyLimitExceeded extends CanSendStoryResult
{
    public const TYPE_NAME = 'canSendStoryResultMonthlyLimitExceeded';

    /**
     * Time left before the user can send the next story
     *
     * @var int
     */
    protected int $retryAfter;

    public function __construct(int $retryAfter)
    {
        parent::__construct();

        $this->retryAfter = $retryAfter;
    }

    public static function fromArray(array $array): CanSendStoryResultMonthlyLimitExceeded
    {
        return new static(
            $array['retry_after'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'retry_after' => $this->retryAfter,
        ];
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }
}

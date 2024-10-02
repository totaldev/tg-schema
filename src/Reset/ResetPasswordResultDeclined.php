<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

/**
 * The password reset request was declined.
 */
class ResetPasswordResultDeclined extends ResetPasswordResult
{
    public const TYPE_NAME = 'resetPasswordResultDeclined';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the password reset can be retried.
         */
        protected int $retryDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ResetPasswordResultDeclined
    {
        return new static(
            $array['retry_date'],
        );
    }

    public function getRetryDate(): int
    {
        return $this->retryDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'retry_date' => $this->retryDate,
        ];
    }
}

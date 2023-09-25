<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The password reset request was declined
 */
class ResetPasswordResultDeclined extends ResetPasswordResult
{
    public const TYPE_NAME = 'resetPasswordResultDeclined';

    /**
     * Point in time (Unix timestamp) when the password reset can be retried
     *
     * @var int
     */
    protected int $retryDate;

    public function __construct(int $retryDate)
    {
        parent::__construct();

        $this->retryDate = $retryDate;
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
            '@type' => static::TYPE_NAME,
            'retry_date' => $this->retryDate,
        ];
    }
}

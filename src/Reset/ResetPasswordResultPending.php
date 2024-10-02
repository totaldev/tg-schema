<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reset;

/**
 * The password reset request is pending.
 */
class ResetPasswordResultPending extends ResetPasswordResult
{
    public const TYPE_NAME = 'resetPasswordResultPending';

    public function __construct(
        /**
         * Point in time (Unix timestamp) after which the password can be reset immediately using resetPassword.
         */
        protected int $pendingResetDate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ResetPasswordResultPending
    {
        return new static(
            $array['pending_reset_date'],
        );
    }

    public function getPendingResetDate(): int
    {
        return $this->pendingResetDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'pending_reset_date' => $this->pendingResetDate,
        ];
    }
}

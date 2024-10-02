<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

/**
 * The code is re-sent, because device verification has failed.
 */
class ResendCodeReasonVerificationFailed extends ResendCodeReason
{
    public const TYPE_NAME = 'resendCodeReasonVerificationFailed';

    public function __construct(
        /**
         * Cause of the verification failure, for example, PLAY_SERVICES_NOT_AVAILABLE, APNS_RECEIVE_TIMEOUT, or APNS_INIT_FAILED.
         */
        protected string $errorMessage
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ResendCodeReasonVerificationFailed
    {
        return new static(
            $array['error_message'],
        );
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'error_message' => $this->errorMessage,
        ];
    }
}

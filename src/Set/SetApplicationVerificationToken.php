<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Application verification has been completed. Can be called before authorization.
 */
class SetApplicationVerificationToken extends TdFunction
{
    public const TYPE_NAME = 'setApplicationVerificationToken';

    public function __construct(
        /**
         * Unique identifier for the verification process as received from updateApplicationVerificationRequired.
         */
        protected int    $verificationId,
        /**
         * Play Integrity API token for the Android application, or secret from push notification for the iOS application; pass an empty string to abort verification and receive error VERIFICATION_FAILED for the request.
         */
        protected string $token,
    ) {}

    public static function fromArray(array $array): SetApplicationVerificationToken
    {
        return new static(
            $array['verification_id'],
            $array['token'],
        );
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getVerificationId(): int
    {
        return $this->verificationId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'verification_id' => $this->verificationId,
            'token'           => $this->token,
        ];
    }
}

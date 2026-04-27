<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Application or reCAPTCHA verification has been completed. Can be called before authorization.
 */
class SetApplicationVerificationToken extends TdFunction
{
    public const string TYPE_NAME = 'setApplicationVerificationToken';

    public function __construct(
        /**
         * Play Integrity API token for the Android application, or secret from push notification for the iOS application for application verification, or reCAPTCHA token for reCAPTCHA verifications; pass an empty string to abort verification and receive the error "VERIFICATION_FAILED" for the request.
         */
        protected string $token,
        /**
         * Unique identifier for the verification process as received from updateApplicationVerificationRequired or updateApplicationRecaptchaVerificationRequired.
         */
        protected int    $verificationId,
    ) {}

    public static function fromArray(array $array): SetApplicationVerificationToken
    {
        return new static(
            token         : $array['token'],
            verificationId: $array['verification_id'],
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

    public function setToken(string $value): static
    {
        $this->token = $value;

        return $this;
    }

    public function setVerificationId(int $value): static
    {
        $this->verificationId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'token'           => $this->token,
            'verification_id' => $this->verificationId,
        ];
    }
}

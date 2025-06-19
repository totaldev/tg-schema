<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

/**
 * TDLib needs the user's email address to authorize. Call setAuthenticationEmailAddress to provide the email address, or directly call
 * checkAuthenticationEmailCode with Apple ID/Google ID token if allowed.
 */
class AuthorizationStateWaitEmailAddress extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitEmailAddress';

    public function __construct(
        /**
         * True, if authorization through Apple ID is allowed.
         */
        protected bool $allowAppleId,
        /**
         * True, if authorization through Google ID is allowed.
         */
        protected bool $allowGoogleId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitEmailAddress
    {
        return new static(
            $array['allow_apple_id'],
            $array['allow_google_id'],
        );
    }

    public function getAllowAppleId(): bool
    {
        return $this->allowAppleId;
    }

    public function getAllowGoogleId(): bool
    {
        return $this->allowGoogleId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'allow_apple_id'  => $this->allowAppleId,
            'allow_google_id' => $this->allowGoogleId,
        ];
    }
}

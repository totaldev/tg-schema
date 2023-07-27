<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * TDLib needs the user's email address to authorize. Call setAuthenticationEmailAddress to provide the email address, or directly call checkAuthenticationEmailCode with Apple ID/Google ID token if allowed
 */
class AuthorizationStateWaitEmailAddress extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitEmailAddress';

    /**
     * True, if authorization through Apple ID is allowed
     *
     * @var bool
     */
    protected bool $allowAppleId;

    /**
     * True, if authorization through Google ID is allowed
     *
     * @var bool
     */
    protected bool $allowGoogleId;

    public function __construct(bool $allowAppleId, bool $allowGoogleId)
    {
        parent::__construct();

        $this->allowAppleId = $allowAppleId;
        $this->allowGoogleId = $allowGoogleId;
    }

    public static function fromArray(array $array): AuthorizationStateWaitEmailAddress
    {
        return new static(
            $array['allow_apple_id'],
            $array['allow_google_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'allow_apple_id' => $this->allowAppleId,
            'allow_google_id' => $this->allowGoogleId,
        ];
    }

    public function getAllowAppleId(): bool
    {
        return $this->allowAppleId;
    }

    public function getAllowGoogleId(): bool
    {
        return $this->allowGoogleId;
    }
}

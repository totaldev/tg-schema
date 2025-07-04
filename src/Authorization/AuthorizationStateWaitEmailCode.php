<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

use Totaldev\TgSchema\Email\EmailAddressAuthenticationCodeInfo;
use Totaldev\TgSchema\Email\EmailAddressResetState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * TDLib needs the user's authentication code sent to an email address to authorize. Call checkAuthenticationEmailCode to provide the code.
 */
class AuthorizationStateWaitEmailCode extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitEmailCode';

    public function __construct(
        /**
         * True, if authorization through Apple ID is allowed.
         */
        protected bool                               $allowAppleId,
        /**
         * True, if authorization through Google ID is allowed.
         */
        protected bool                               $allowGoogleId,
        /**
         * Information about the sent authentication code.
         */
        protected EmailAddressAuthenticationCodeInfo $codeInfo,
        /**
         * Reset state of the email address; may be null if the email address can't be reset.
         */
        protected ?EmailAddressResetState            $emailAddressResetState,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitEmailCode
    {
        return new static(
            $array['allow_apple_id'],
            $array['allow_google_id'],
            TdSchemaRegistry::fromArray($array['code_info']),
            isset($array['email_address_reset_state']) ? TdSchemaRegistry::fromArray($array['email_address_reset_state']) : null,
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

    public function getCodeInfo(): EmailAddressAuthenticationCodeInfo
    {
        return $this->codeInfo;
    }

    public function getEmailAddressResetState(): ?EmailAddressResetState
    {
        return $this->emailAddressResetState;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'allow_apple_id'            => $this->allowAppleId,
            'allow_google_id'           => $this->allowGoogleId,
            'code_info'                 => $this->codeInfo->typeSerialize(),
            'email_address_reset_state' => $this->emailAddressResetState ?? null,
        ];
    }
}

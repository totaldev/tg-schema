<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks a passkey to log in to the corresponding account. Call getAuthenticationPasskeyParameters to get parameters for the passkey. Works only when the
 * current authorization state is authorizationStateWaitPhoneNumber or authorizationStateWaitOtherDeviceConfirmation, or if there is no pending authentication
 * query and the current authorization state is authorizationStateWaitPremiumPurchase, authorizationStateWaitEmailAddress, authorizationStateWaitEmailCode,
 * authorizationStateWaitCode, authorizationStateWaitRegistration, or authorizationStateWaitPassword.
 */
class CheckAuthenticationPasskey extends TdFunction
{
    public const string TYPE_NAME = 'checkAuthenticationPasskey';

    public function __construct(
        /**
         * Authenticator data of the application that created the credential.
         */
        protected string $authenticatorData,
        /**
         * JSON-encoded client data.
         */
        protected string $clientData,
        /**
         * Base64url-encoded identifier of the credential.
         */
        protected string $credentialId,
        /**
         * Cryptographic signature of the credential.
         */
        protected string $signature,
        /**
         * User handle of the passkey.
         */
        protected string $userHandle,
    ) {}

    public static function fromArray(array $array): CheckAuthenticationPasskey
    {
        return new static(
            authenticatorData: $array['authenticator_data'],
            clientData       : $array['client_data'],
            credentialId     : $array['credential_id'],
            signature        : $array['signature'],
            userHandle       : $array['user_handle'],
        );
    }

    public function getAuthenticatorData(): string
    {
        return $this->authenticatorData;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }

    public function getCredentialId(): string
    {
        return $this->credentialId;
    }

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function getUserHandle(): string
    {
        return $this->userHandle;
    }

    public function setAuthenticatorData(string $value): static
    {
        $this->authenticatorData = $value;

        return $this;
    }

    public function setClientData(string $value): static
    {
        $this->clientData = $value;

        return $this;
    }

    public function setCredentialId(string $value): static
    {
        $this->credentialId = $value;

        return $this;
    }

    public function setSignature(string $value): static
    {
        $this->signature = $value;

        return $this;
    }

    public function setUserHandle(string $value): static
    {
        $this->userHandle = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'authenticator_data' => $this->authenticatorData,
            'client_data'        => $this->clientData,
            'credential_id'      => $this->credentialId,
            'signature'          => $this->signature,
            'user_handle'        => $this->userHandle,
        ];
    }
}

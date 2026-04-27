<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a passkey allowed to be used for the login by the current user and returns the added passkey. Call getPasskeyParameters to get parameters for creating
 * of the passkey.
 */
class AddLoginPasskey extends TdFunction
{
    public const string TYPE_NAME = 'addLoginPasskey';

    public function __construct(
        /**
         * Passkey attestation object.
         */
        protected string $attestationObject,
        /**
         * JSON-encoded client data.
         */
        protected string $clientData,
    ) {}

    public static function fromArray(array $array): AddLoginPasskey
    {
        return new static(
            attestationObject: $array['attestation_object'],
            clientData       : $array['client_data'],
        );
    }

    public function getAttestationObject(): string
    {
        return $this->attestationObject;
    }

    public function getClientData(): string
    {
        return $this->clientData;
    }

    public function setAttestationObject(string $value): static
    {
        $this->attestationObject = $value;

        return $this;
    }

    public function setClientData(string $value): static
    {
        $this->clientData = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'attestation_object' => $this->attestationObject,
            'client_data'        => $this->clientData,
        ];
    }
}

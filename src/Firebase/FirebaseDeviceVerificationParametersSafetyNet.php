<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

/**
 * Device verification must be performed with the SafetyNet Attestation API.
 */
class FirebaseDeviceVerificationParametersSafetyNet extends FirebaseDeviceVerificationParameters
{
    public const TYPE_NAME = 'firebaseDeviceVerificationParametersSafetyNet';

    public function __construct(
        /**
         * Nonce to pass to the SafetyNet Attestation API.
         */
        protected string $nonce
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): FirebaseDeviceVerificationParametersSafetyNet
    {
        return new static(
            $array['nonce'],
        );
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'nonce' => $this->nonce,
        ];
    }
}

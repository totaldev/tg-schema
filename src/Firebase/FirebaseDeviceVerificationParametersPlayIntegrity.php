<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Firebase;

/**
 * Device verification must be performed with the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic).
 */
class FirebaseDeviceVerificationParametersPlayIntegrity extends FirebaseDeviceVerificationParameters
{
    public const TYPE_NAME = 'firebaseDeviceVerificationParametersPlayIntegrity';

    public function __construct(
        /**
         * Base64url-encoded nonce to pass to the Play Integrity API.
         */
        protected string $nonce,
        /**
         * Cloud project number to pass to the Play Integrity API.
         */
        protected int    $cloudProjectNumber,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): FirebaseDeviceVerificationParametersPlayIntegrity
    {
        return new static(
            $array['nonce'],
            $array['cloud_project_number'],
        );
    }

    public function getCloudProjectNumber(): int
    {
        return $this->cloudProjectNumber;
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'nonce'                => $this->nonce,
            'cloud_project_number' => $this->cloudProjectNumber,
        ];
    }
}

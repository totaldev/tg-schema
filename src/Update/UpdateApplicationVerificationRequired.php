<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A request can't be completed unless application verification is performed; for official mobile applications only. The method setApplicationVerificationToken
 * must be called once the verification is completed or failed.
 */
class UpdateApplicationVerificationRequired extends Update
{
    public const string TYPE_NAME = 'updateApplicationVerificationRequired';

    public function __construct(
        /**
         * Cloud project number to pass to the Play Integrity API on Android.
         */
        protected int    $cloudProjectNumber,
        /**
         * Unique base64url-encoded nonce for the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic) for Android, or a unique string to compare with verify_nonce field from a push notification for iOS.
         */
        protected string $nonce,
        /**
         * Unique identifier for the verification process.
         */
        protected int    $verificationId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateApplicationVerificationRequired
    {
        return new static(
            cloudProjectNumber: $array['cloud_project_number'],
            nonce             : $array['nonce'],
            verificationId    : $array['verification_id'],
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

    public function getVerificationId(): int
    {
        return $this->verificationId;
    }

    public function setCloudProjectNumber(int $value): static
    {
        $this->cloudProjectNumber = $value;

        return $this;
    }

    public function setNonce(string $value): static
    {
        $this->nonce = $value;

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
            '@type'                => static::TYPE_NAME,
            'cloud_project_number' => $this->cloudProjectNumber,
            'nonce'                => $this->nonce,
            'verification_id'      => $this->verificationId,
        ];
    }
}

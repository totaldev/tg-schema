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
    public const TYPE_NAME = 'updateApplicationVerificationRequired';

    public function __construct(
        /**
         * Unique identifier for the verification process.
         */
        protected int    $verificationId,
        /**
         * Unique base64url-encoded nonce for the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic) for Android, or a unique string to compare with verify_nonce field from a push notification for iOS.
         */
        protected string $nonce,
        /**
         * Cloud project number to pass to the Play Integrity API on Android.
         */
        protected int    $cloudProjectNumber,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateApplicationVerificationRequired
    {
        return new static(
            $array['verification_id'],
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

    public function getVerificationId(): int
    {
        return $this->verificationId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'verification_id'      => $this->verificationId,
            'nonce'                => $this->nonce,
            'cloud_project_number' => $this->cloudProjectNumber,
        ];
    }
}

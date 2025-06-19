<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A request can't be completed unless reCAPTCHA verification is performed; for official mobile applications only. The method setApplicationVerificationToken
 * must be called once the verification is completed or failed.
 */
class UpdateApplicationRecaptchaVerificationRequired extends Update
{
    public const TYPE_NAME = 'updateApplicationRecaptchaVerificationRequired';

    public function __construct(
        /**
         * Unique identifier for the verification process.
         */
        protected int    $verificationId,
        /**
         * The action for the check.
         */
        protected string $action,
        /**
         * Identifier of the reCAPTCHA key.
         */
        protected string $recaptchaKeyId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateApplicationRecaptchaVerificationRequired
    {
        return new static(
            $array['verification_id'],
            $array['action'],
            $array['recaptcha_key_id'],
        );
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getRecaptchaKeyId(): string
    {
        return $this->recaptchaKeyId;
    }

    public function getVerificationId(): int
    {
        return $this->verificationId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'verification_id'  => $this->verificationId,
            'action'           => $this->action,
            'recaptcha_key_id' => $this->recaptchaKeyId,
        ];
    }
}

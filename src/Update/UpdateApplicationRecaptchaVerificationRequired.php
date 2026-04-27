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
    public const string TYPE_NAME = 'updateApplicationRecaptchaVerificationRequired';

    public function __construct(
        /**
         * The action for the check.
         */
        protected string $action,
        /**
         * Identifier of the reCAPTCHA key.
         */
        protected string $recaptchaKeyId,
        /**
         * Unique identifier for the verification process.
         */
        protected int    $verificationId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateApplicationRecaptchaVerificationRequired
    {
        return new static(
            action        : $array['action'],
            recaptchaKeyId: $array['recaptcha_key_id'],
            verificationId: $array['verification_id'],
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

    public function setAction(string $value): static
    {
        $this->action = $value;

        return $this;
    }

    public function setRecaptchaKeyId(string $value): static
    {
        $this->recaptchaKeyId = $value;

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
            '@type'            => static::TYPE_NAME,
            'action'           => $this->action,
            'recaptcha_key_id' => $this->recaptchaKeyId,
            'verification_id'  => $this->verificationId,
        ];
    }
}

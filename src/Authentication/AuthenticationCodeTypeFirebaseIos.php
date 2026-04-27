<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * A digit-only authentication code is delivered via Firebase Authentication to the official iOS application.
 */
class AuthenticationCodeTypeFirebaseIos extends AuthenticationCodeType
{
    public const string TYPE_NAME = 'authenticationCodeTypeFirebaseIos';

    public function __construct(
        /**
         * Length of the code.
         */
        protected int    $length,
        /**
         * Time after the next authentication method is expected to be used if verification push notification isn't received, in seconds.
         */
        protected int    $pushTimeout,
        /**
         * Receipt of successful application token validation to compare with receipt from push notification.
         */
        protected string $receipt,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFirebaseIos
    {
        return new static(
            length     : $array['length'],
            pushTimeout: $array['push_timeout'],
            receipt    : $array['receipt'],
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getPushTimeout(): int
    {
        return $this->pushTimeout;
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function setLength(int $value): static
    {
        $this->length = $value;

        return $this;
    }

    public function setPushTimeout(int $value): static
    {
        $this->pushTimeout = $value;

        return $this;
    }

    public function setReceipt(string $value): static
    {
        $this->receipt = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'length'       => $this->length,
            'push_timeout' => $this->pushTimeout,
            'receipt'      => $this->receipt,
        ];
    }
}

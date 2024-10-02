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
    public const TYPE_NAME = 'authenticationCodeTypeFirebaseIos';

    public function __construct(
        /**
         * Receipt of successful application token validation to compare with receipt from push notification.
         */
        protected string $receipt,
        /**
         * Time after the next authentication method is supposed to be used if verification push notification isn't received, in seconds.
         */
        protected int    $pushTimeout,
        /**
         * Length of the code.
         */
        protected int    $length,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFirebaseIos
    {
        return new static(
            $array['receipt'],
            $array['push_timeout'],
            $array['length'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'receipt'      => $this->receipt,
            'push_timeout' => $this->pushTimeout,
            'length'       => $this->length,
        ];
    }
}

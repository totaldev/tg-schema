<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * An authentication code is delivered via Firebase Authentication to the official iOS application
 */
class AuthenticationCodeTypeFirebaseIos extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFirebaseIos';

    /**
     * Receipt of successful application token validation to compare with receipt from push notification
     *
     * @var string
     */
    protected string $receipt;

    /**
     * Time after the next authentication method is supposed to be used if verification push notification isn't received, in seconds
     *
     * @var int
     */
    protected int $pushTimeout;

    /**
     * Length of the code
     *
     * @var int
     */
    protected int $length;

    public function __construct(string $receipt, int $pushTimeout, int $length)
    {
        parent::__construct();

        $this->receipt = $receipt;
        $this->pushTimeout = $pushTimeout;
        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFirebaseIos
    {
        return new static(
            $array['receipt'],
            $array['push_timeout'],
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'receipt' => $this->receipt,
            'push_timeout' => $this->pushTimeout,
            'length' => $this->length,
        ];
    }

    public function getReceipt(): string
    {
        return $this->receipt;
    }

    public function getPushTimeout(): int
    {
        return $this->pushTimeout;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}

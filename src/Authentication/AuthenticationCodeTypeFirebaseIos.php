<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authentication code is delivered via Firebase Authentication to the official iOS application
 */
class AuthenticationCodeTypeFirebaseIos extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFirebaseIos';

    /**
     * Length of the code
     *
     * @var int
     */
    protected int $length;

    /**
     * Time after the next authentication method is supposed to be used if verification push notification isn't received, in seconds
     *
     * @var int
     */
    protected int $pushTimeout;

    /**
     * Receipt of successful application token validation to compare with receipt from push notification
     *
     * @var string
     */
    protected string $receipt;

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
            '@type' => static::TYPE_NAME,
            'receipt' => $this->receipt,
            'push_timeout' => $this->pushTimeout,
            'length' => $this->length,
        ];
    }
}

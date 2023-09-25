<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks the phone number verification code for Telegram Passport
 */
class CheckPhoneNumberVerificationCode extends TdFunction
{
    public const TYPE_NAME = 'checkPhoneNumberVerificationCode';

    /**
     * Verification code to check
     *
     * @var string
     */
    protected string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public static function fromArray(array $array): CheckPhoneNumberVerificationCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code' => $this->code,
        ];
    }
}

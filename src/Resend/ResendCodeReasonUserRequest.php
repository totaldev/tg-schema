<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

/**
 * The user requested to resend the code.
 */
class ResendCodeReasonUserRequest extends ResendCodeReason
{
    public const TYPE_NAME = 'resendCodeReasonUserRequest';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ResendCodeReasonUserRequest
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

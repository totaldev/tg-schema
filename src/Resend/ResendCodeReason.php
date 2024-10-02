<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the reason why a code needs to be re-sent.
 */
class ResendCodeReason extends TdObject
{
    public const TYPE_NAME = 'ResendCodeReason';

    public function __construct() {}

    public static function fromArray(array $array): ResendCodeReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdObject;

/**
 * Describes reason for refund of the payment for a suggested post.
 */
class SuggestedPostRefundReason extends TdObject
{
    public const string TYPE_NAME = 'SuggestedPostRefundReason';

    public function __construct() {}

    public static function fromArray(array $array): SuggestedPostRefundReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * The post was refunded, because it was deleted by channel administrators in less than getOption("suggested_post_lifetime_min") seconds.
 */
class SuggestedPostRefundReasonPostDeleted extends SuggestedPostRefundReason
{
    public const string TYPE_NAME = 'suggestedPostRefundReasonPostDeleted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostRefundReasonPostDeleted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

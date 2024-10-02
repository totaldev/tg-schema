<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

/**
 * The media is unsupported.
 */
class PaidMediaUnsupported extends PaidMedia
{
    public const TYPE_NAME = 'paidMediaUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PaidMediaUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

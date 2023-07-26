<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Contains authentication data for a email address
 */
class EmailAddressAuthentication extends TdObject
{
    public const TYPE_NAME = 'EmailAddressAuthentication';

    public function __construct()
    {
    }

    public static function fromArray(array $array): EmailAddressAuthentication
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

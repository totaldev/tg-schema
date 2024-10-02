<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Email;

use Totaldev\TgSchema\TdObject;

/**
 * Contains authentication data for an email address.
 */
class EmailAddressAuthentication extends TdObject
{
    public const TYPE_NAME = 'EmailAddressAuthentication';

    public function __construct() {}

    public static function fromArray(array $array): EmailAddressAuthentication
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

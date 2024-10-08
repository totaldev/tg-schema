<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the change phone number section of the application.
 */
class InternalLinkTypeChangePhoneNumber extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeChangePhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeChangePhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

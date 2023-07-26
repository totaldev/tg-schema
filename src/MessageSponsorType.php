<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes type of a message sponsor
 */
class MessageSponsorType extends TdObject
{
    public const TYPE_NAME = 'MessageSponsorType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageSponsorType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

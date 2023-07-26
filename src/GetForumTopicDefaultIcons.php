<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Returns list of custom emojis, which can be used as forum topic icon by all users
 */
class GetForumTopicDefaultIcons extends TdFunction
{
    public const TYPE_NAME = 'getForumTopicDefaultIcons';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetForumTopicDefaultIcons
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

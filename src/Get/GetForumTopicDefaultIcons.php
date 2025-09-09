<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of custom emoji, which can be used as forum topic icon by all users.
 */
class GetForumTopicDefaultIcons extends TdFunction
{
    public const TYPE_NAME = 'getForumTopicDefaultIcons';

    public function __construct() {}

    public static function fromArray(array $array): GetForumTopicDefaultIcons
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

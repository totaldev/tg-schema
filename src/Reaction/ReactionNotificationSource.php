<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes sources of reactions for which notifications will be shown.
 */
class ReactionNotificationSource extends TdObject
{
    public const TYPE_NAME = 'ReactionNotificationSource';

    public function __construct() {}

    public static function fromArray(array $array): ReactionNotificationSource
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

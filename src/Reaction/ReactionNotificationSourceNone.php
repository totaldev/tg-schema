<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * Notifications for reactions are disabled.
 */
class ReactionNotificationSourceNone extends ReactionNotificationSource
{
    public const TYPE_NAME = 'reactionNotificationSourceNone';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionNotificationSourceNone
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

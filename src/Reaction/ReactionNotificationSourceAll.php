<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * Notifications for reactions are shown for all reactions.
 */
class ReactionNotificationSourceAll extends ReactionNotificationSource
{
    public const string TYPE_NAME = 'reactionNotificationSourceAll';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionNotificationSourceAll
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

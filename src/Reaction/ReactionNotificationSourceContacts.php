<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * Notifications for reactions are shown only for reactions from contacts.
 */
class ReactionNotificationSourceContacts extends ReactionNotificationSource
{
    public const TYPE_NAME = 'reactionNotificationSourceContacts';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionNotificationSourceContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

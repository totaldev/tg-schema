<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The user can't be messaged, because they restrict new chats with non-contacts.
 */
class CanSendMessageToUserResultUserRestrictsNewChats extends CanSendMessageToUserResult
{
    public const TYPE_NAME = 'canSendMessageToUserResultUserRestrictsNewChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendMessageToUserResultUserRestrictsNewChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

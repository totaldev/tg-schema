<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the type of a chat to which points an invite link
 */
class InviteLinkChatType extends TdObject
{
    public const TYPE_NAME = 'InviteLinkChatType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InviteLinkChatType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

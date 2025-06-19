<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatPermissions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the chat members permissions. Supported only for basic groups and supergroups. Requires can_restrict_members administrator right.
 */
class SetChatPermissions extends TdFunction
{
    public const TYPE_NAME = 'setChatPermissions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * New non-administrator members permissions in the chat.
         */
        protected ChatPermissions $permissions
    ) {}

    public static function fromArray(array $array): SetChatPermissions
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['permissions']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPermissions(): ChatPermissions
    {
        return $this->permissions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'permissions' => $this->permissions->typeSerialize(),
        ];
    }
}

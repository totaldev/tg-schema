<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatPermissions;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Chat permissions were changed.
 */
class UpdateChatPermissions extends Update
{
    public const string TYPE_NAME = 'updateChatPermissions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * The new chat permissions.
         */
        protected ChatPermissions $permissions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatPermissions
    {
        return new static(
            chatId     : $array['chat_id'],
            permissions: TdSchemaRegistry::fromArray($array['permissions']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setPermissions(ChatPermissions $value): static
    {
        $this->permissions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'permissions' => $this->permissions->jsonSerialize(),
        ];
    }
}

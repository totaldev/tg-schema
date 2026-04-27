<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat permissions were changed.
 */
class ChatEventPermissionsChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventPermissionsChanged';

    public function __construct(
        /**
         * New chat permissions.
         */
        protected ChatPermissions $newPermissions,
        /**
         * Previous chat permissions.
         */
        protected ChatPermissions $oldPermissions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventPermissionsChanged
    {
        return new static(
            newPermissions: TdSchemaRegistry::fromArray($array['new_permissions']),
            oldPermissions: TdSchemaRegistry::fromArray($array['old_permissions']),
        );
    }

    public function getNewPermissions(): ChatPermissions
    {
        return $this->newPermissions;
    }

    public function getOldPermissions(): ChatPermissions
    {
        return $this->oldPermissions;
    }

    public function setNewPermissions(ChatPermissions $value): static
    {
        $this->newPermissions = $value;

        return $this;
    }

    public function setOldPermissions(ChatPermissions $value): static
    {
        $this->oldPermissions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'new_permissions' => $this->newPermissions->jsonSerialize(),
            'old_permissions' => $this->oldPermissions->jsonSerialize(),
        ];
    }
}

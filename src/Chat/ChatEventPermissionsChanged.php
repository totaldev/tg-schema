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
    public const TYPE_NAME = 'chatEventPermissionsChanged';

    public function __construct(
        /**
         * Previous chat permissions.
         */
        protected ChatPermissions $oldPermissions,
        /**
         * New chat permissions.
         */
        protected ChatPermissions $newPermissions
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventPermissionsChanged
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_permissions']),
            TdSchemaRegistry::fromArray($array['new_permissions']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'old_permissions' => $this->oldPermissions->typeSerialize(),
            'new_permissions' => $this->newPermissions->typeSerialize(),
        ];
    }
}

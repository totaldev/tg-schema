<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat permissions was changed
 */
class ChatEventPermissionsChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventPermissionsChanged';

    /**
     * New chat permissions
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $newPermissions;

    /**
     * Previous chat permissions
     *
     * @var ChatPermissions
     */
    protected ChatPermissions $oldPermissions;

    public function __construct(ChatPermissions $oldPermissions, ChatPermissions $newPermissions)
    {
        parent::__construct();

        $this->oldPermissions = $oldPermissions;
        $this->newPermissions = $newPermissions;
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
            '@type' => static::TYPE_NAME,
            'old_permissions' => $this->oldPermissions->typeSerialize(),
            'new_permissions' => $this->newPermissions->typeSerialize(),
        ];
    }
}

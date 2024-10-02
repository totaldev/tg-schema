<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Sets default administrator rights for adding the bot to basic group and supergroup chats; for bots only
 */
class SetDefaultGroupAdministratorRights extends TdFunction
{
    public const TYPE_NAME = 'setDefaultGroupAdministratorRights';

    /**
     * Default administrator rights for adding the bot to basic group and supergroup chats; may be null
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $defaultGroupAdministratorRights;

    public function __construct(?ChatAdministratorRights $defaultGroupAdministratorRights)
    {
        $this->defaultGroupAdministratorRights = $defaultGroupAdministratorRights;
    }

    public static function fromArray(array $array): SetDefaultGroupAdministratorRights
    {
        return new static(
            (isset($array['default_group_administrator_rights']) ? TdSchemaRegistry::fromArray($array['default_group_administrator_rights']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'default_group_administrator_rights' => (isset($this->defaultGroupAdministratorRights) ? $this->defaultGroupAdministratorRights : null),
        ];
    }

    public function getDefaultGroupAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->defaultGroupAdministratorRights;
    }
}

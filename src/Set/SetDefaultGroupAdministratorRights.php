<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets default administrator rights for adding the bot to basic group and supergroup chats; for bots only.
 */
class SetDefaultGroupAdministratorRights extends TdFunction
{
    public const TYPE_NAME = 'setDefaultGroupAdministratorRights';

    public function __construct(
        /**
         * Default administrator rights for adding the bot to basic group and supergroup chats; pass null to remove default rights.
         */
        protected ?ChatAdministratorRights $defaultGroupAdministratorRights = null
    ) {}

    public static function fromArray(array $array): SetDefaultGroupAdministratorRights
    {
        return new static(
            TdSchemaRegistry::fromArray($array['default_group_administrator_rights']),
        );
    }

    public function getDefaultGroupAdministratorRights(): ChatAdministratorRights
    {
        return $this->defaultGroupAdministratorRights;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'default_group_administrator_rights' => $this->defaultGroupAdministratorRights->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets default administrator rights for adding the bot to channel chats; for bots only.
 */
class SetDefaultChannelAdministratorRights extends TdFunction
{
    public const TYPE_NAME = 'setDefaultChannelAdministratorRights';

    public function __construct(
        /**
         * Default administrator rights for adding the bot to channels; pass null to remove default rights.
         */
        protected ?ChatAdministratorRights $defaultChannelAdministratorRights = null
    ) {}

    public static function fromArray(array $array): SetDefaultChannelAdministratorRights
    {
        return new static(
            TdSchemaRegistry::fromArray($array['default_channel_administrator_rights']),
        );
    }

    public function getDefaultChannelAdministratorRights(): ChatAdministratorRights
    {
        return $this->defaultChannelAdministratorRights;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                => static::TYPE_NAME,
            'default_channel_administrator_rights' => $this->defaultChannelAdministratorRights->typeSerialize(),
        ];
    }
}

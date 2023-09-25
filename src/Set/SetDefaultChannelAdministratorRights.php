<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets default administrator rights for adding the bot to channel chats; for bots only
 */
class SetDefaultChannelAdministratorRights extends TdFunction
{
    public const TYPE_NAME = 'setDefaultChannelAdministratorRights';

    /**
     * Default administrator rights for adding the bot to channels; pass null to remove default rights
     *
     * @var ChatAdministratorRights
     */
    protected ChatAdministratorRights $defaultChannelAdministratorRights;

    public function __construct(ChatAdministratorRights $defaultChannelAdministratorRights)
    {
        $this->defaultChannelAdministratorRights = $defaultChannelAdministratorRights;
    }

    public static function fromArray(array $array): SetDefaultChannelAdministratorRights
    {
        return new static(
            TdSchemaRegistry::fromArray($array['default_channel_administrator_rights']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'default_channel_administrator_rights' => $this->defaultChannelAdministratorRights->typeSerialize(),
        ];
    }

    public function getDefaultChannelAdministratorRights(): ChatAdministratorRights
    {
        return $this->defaultChannelAdministratorRights;
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Sets default administrator rights for adding the bot to channel chats; for bots only
 */
class SetDefaultChannelAdministratorRights extends TdFunction
{
    public const TYPE_NAME = 'setDefaultChannelAdministratorRights';

    /**
     * Default administrator rights for adding the bot to channels; may be null
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $defaultChannelAdministratorRights;

    public function __construct(?ChatAdministratorRights $defaultChannelAdministratorRights)
    {
        $this->defaultChannelAdministratorRights = $defaultChannelAdministratorRights;
    }

    public static function fromArray(array $array): SetDefaultChannelAdministratorRights
    {
        return new static(
            (isset($array['default_channel_administrator_rights']) ? TdSchemaRegistry::fromArray($array['default_channel_administrator_rights']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'default_channel_administrator_rights' => (isset($this->defaultChannelAdministratorRights) ? $this->defaultChannelAdministratorRights : null),
        ];
    }

    public function getDefaultChannelAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->defaultChannelAdministratorRights;
    }
}

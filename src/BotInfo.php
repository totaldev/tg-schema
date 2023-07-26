<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Contains information about a bot
 */
class BotInfo extends TdObject
{
    public const TYPE_NAME = 'botInfo';

    /**
     * The text that is shown on the bot's profile page and is sent together with the link when users share the bot
     *
     * @var string
     */
    protected string $shortDescription;

    /**
     * The text shown in the chat with the bot if the chat is empty
     *
     * @var string
     */
    protected string $description;

    /**
     * Photo shown in the chat with the bot if the chat is empty; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $photo;

    /**
     * Animation shown in the chat with the bot if the chat is empty; may be null
     *
     * @var Animation|null
     */
    protected ?Animation $animation;

    /**
     * Information about a button to show instead of the bot commands menu button; may be null if ordinary bot commands menu must be shown
     *
     * @var BotMenuButton|null
     */
    protected ?BotMenuButton $menuButton;

    /**
     * List of the bot commands
     *
     * @var BotCommand[]
     */
    protected array $commands;

    /**
     * Default administrator rights for adding the bot to basic group and supergroup chats; may be null
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $defaultGroupAdministratorRights;

    /**
     * Default administrator rights for adding the bot to channels; may be null
     *
     * @var ChatAdministratorRights|null
     */
    protected ?ChatAdministratorRights $defaultChannelAdministratorRights;

    /**
     * The internal link, which can be used to edit bot commands; may be null
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $editCommandsLink;

    /**
     * The internal link, which can be used to edit bot description; may be null
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $editDescriptionLink;

    /**
     * The internal link, which can be used to edit the photo or animation shown in the chat with the bot if the chat is empty; may be null
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $editDescriptionMediaLink;

    /**
     * The internal link, which can be used to edit bot settings; may be null
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $editSettingsLink;

    public function __construct(
        string $shortDescription,
        string $description,
        ?Photo $photo,
        ?Animation $animation,
        ?BotMenuButton $menuButton,
        array $commands,
        ?ChatAdministratorRights $defaultGroupAdministratorRights,
        ?ChatAdministratorRights $defaultChannelAdministratorRights,
        ?InternalLinkType $editCommandsLink,
        ?InternalLinkType $editDescriptionLink,
        ?InternalLinkType $editDescriptionMediaLink,
        ?InternalLinkType $editSettingsLink
    ) {
        $this->shortDescription = $shortDescription;
        $this->description = $description;
        $this->photo = $photo;
        $this->animation = $animation;
        $this->menuButton = $menuButton;
        $this->commands = $commands;
        $this->defaultGroupAdministratorRights = $defaultGroupAdministratorRights;
        $this->defaultChannelAdministratorRights = $defaultChannelAdministratorRights;
        $this->editCommandsLink = $editCommandsLink;
        $this->editDescriptionLink = $editDescriptionLink;
        $this->editDescriptionMediaLink = $editDescriptionMediaLink;
        $this->editSettingsLink = $editSettingsLink;
    }

    public static function fromArray(array $array): BotInfo
    {
        return new static(
            $array['short_description'],
            $array['description'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            (isset($array['menu_button']) ? TdSchemaRegistry::fromArray($array['menu_button']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
            (isset($array['default_group_administrator_rights']) ? TdSchemaRegistry::fromArray($array['default_group_administrator_rights']) : null),
            (isset($array['default_channel_administrator_rights']) ? TdSchemaRegistry::fromArray($array['default_channel_administrator_rights']) : null),
            (isset($array['edit_commands_link']) ? TdSchemaRegistry::fromArray($array['edit_commands_link']) : null),
            (isset($array['edit_description_link']) ? TdSchemaRegistry::fromArray($array['edit_description_link']) : null),
            (isset($array['edit_description_media_link']) ? TdSchemaRegistry::fromArray($array['edit_description_media_link']) : null),
            (isset($array['edit_settings_link']) ? TdSchemaRegistry::fromArray($array['edit_settings_link']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'short_description' => $this->shortDescription,
            'description' => $this->description,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'animation' => (isset($this->animation) ? $this->animation : null),
            'menu_button' => (isset($this->menuButton) ? $this->menuButton : null),
            array_map(fn($x) => $x->typeSerialize(), $this->commands),
            'default_group_administrator_rights' => (isset($this->defaultGroupAdministratorRights) ? $this->defaultGroupAdministratorRights : null),
            'default_channel_administrator_rights' => (isset($this->defaultChannelAdministratorRights) ? $this->defaultChannelAdministratorRights : null),
            'edit_commands_link' => (isset($this->editCommandsLink) ? $this->editCommandsLink : null),
            'edit_description_link' => (isset($this->editDescriptionLink) ? $this->editDescriptionLink : null),
            'edit_description_media_link' => (isset($this->editDescriptionMediaLink) ? $this->editDescriptionMediaLink : null),
            'edit_settings_link' => (isset($this->editSettingsLink) ? $this->editSettingsLink : null),
        ];
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getMenuButton(): ?BotMenuButton
    {
        return $this->menuButton;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }

    public function getDefaultGroupAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->defaultGroupAdministratorRights;
    }

    public function getDefaultChannelAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->defaultChannelAdministratorRights;
    }

    public function getEditCommandsLink(): ?InternalLinkType
    {
        return $this->editCommandsLink;
    }

    public function getEditDescriptionLink(): ?InternalLinkType
    {
        return $this->editDescriptionLink;
    }

    public function getEditDescriptionMediaLink(): ?InternalLinkType
    {
        return $this->editDescriptionMediaLink;
    }

    public function getEditSettingsLink(): ?InternalLinkType
    {
        return $this->editSettingsLink;
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\Chat\ChatAdministratorRights;
use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a bot.
 */
class BotInfo extends TdObject
{
    public const TYPE_NAME = 'botInfo';

    public function __construct(
        /**
         * The text that is shown on the bot's profile page and is sent together with the link when users share the bot.
         */
        protected string                   $shortDescription,
        /**
         * The text shown in the chat with the bot if the chat is empty.
         */
        protected string                   $description,
        /**
         * Photo shown in the chat with the bot if the chat is empty; may be null.
         */
        protected ?Photo                   $photo,
        /**
         * Animation shown in the chat with the bot if the chat is empty; may be null.
         */
        protected ?Animation               $animation,
        /**
         * Information about a button to show instead of the bot commands menu button; may be null if ordinary bot commands menu must be shown.
         */
        protected ?BotMenuButton           $menuButton,
        /**
         * List of the bot commands.
         *
         * @var BotCommand[]
         */
        protected array                    $commands,
        /**
         * The HTTP link to the privacy policy of the bot. If empty, then /privacy command must be used if supported by the bot. If the command isn't supported, then https://telegram.org/privacy-tpa must be opened.
         */
        protected string                   $privacyPolicyUrl,
        /**
         * Default administrator rights for adding the bot to basic group and supergroup chats; may be null.
         */
        protected ?ChatAdministratorRights $defaultGroupAdministratorRights,
        /**
         * Default administrator rights for adding the bot to channels; may be null.
         */
        protected ?ChatAdministratorRights $defaultChannelAdministratorRights,
        /**
         * True, if the bot has media previews.
         */
        protected bool                     $hasMediaPreviews,
        /**
         * The internal link, which can be used to edit bot commands; may be null.
         */
        protected ?InternalLinkType        $editCommandsLink,
        /**
         * The internal link, which can be used to edit bot description; may be null.
         */
        protected ?InternalLinkType        $editDescriptionLink,
        /**
         * The internal link, which can be used to edit the photo or animation shown in the chat with the bot if the chat is empty; may be null.
         */
        protected ?InternalLinkType        $editDescriptionMediaLink,
        /**
         * The internal link, which can be used to edit bot settings; may be null.
         */
        protected ?InternalLinkType        $editSettingsLink,
    ) {}

    public static function fromArray(array $array): BotInfo
    {
        return new static(
            $array['short_description'],
            $array['description'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null,
            isset($array['menu_button']) ? TdSchemaRegistry::fromArray($array['menu_button']) : null,
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
            $array['privacy_policy_url'],
            isset($array['default_group_administrator_rights']) ? TdSchemaRegistry::fromArray($array['default_group_administrator_rights']) : null,
            isset($array['default_channel_administrator_rights']) ? TdSchemaRegistry::fromArray($array['default_channel_administrator_rights']) : null,
            $array['has_media_previews'],
            isset($array['edit_commands_link']) ? TdSchemaRegistry::fromArray($array['edit_commands_link']) : null,
            isset($array['edit_description_link']) ? TdSchemaRegistry::fromArray($array['edit_description_link']) : null,
            isset($array['edit_description_media_link']) ? TdSchemaRegistry::fromArray($array['edit_description_media_link']) : null,
            isset($array['edit_settings_link']) ? TdSchemaRegistry::fromArray($array['edit_settings_link']) : null,
        );
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }

    public function getDefaultChannelAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->defaultChannelAdministratorRights;
    }

    public function getDefaultGroupAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->defaultGroupAdministratorRights;
    }

    public function getDescription(): string
    {
        return $this->description;
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

    public function getHasMediaPreviews(): bool
    {
        return $this->hasMediaPreviews;
    }

    public function getMenuButton(): ?BotMenuButton
    {
        return $this->menuButton;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getPrivacyPolicyUrl(): string
    {
        return $this->privacyPolicyUrl;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                => static::TYPE_NAME,
            'short_description'                    => $this->shortDescription,
            'description'                          => $this->description,
            'photo'                                => (isset($this->photo) ? $this->photo : null),
            'animation'                            => (isset($this->animation) ? $this->animation : null),
            'menu_button'                          => (isset($this->menuButton) ? $this->menuButton : null),
            array_map(fn($x) => $x->typeSerialize(), $this->commands),
            'privacy_policy_url'                   => $this->privacyPolicyUrl,
            'default_group_administrator_rights'   => (isset($this->defaultGroupAdministratorRights) ? $this->defaultGroupAdministratorRights : null),
            'default_channel_administrator_rights' => (isset($this->defaultChannelAdministratorRights) ? $this->defaultChannelAdministratorRights : null),
            'has_media_previews'                   => $this->hasMediaPreviews,
            'edit_commands_link'                   => (isset($this->editCommandsLink) ? $this->editCommandsLink : null),
            'edit_description_link'                => (isset($this->editDescriptionLink) ? $this->editDescriptionLink : null),
            'edit_description_media_link'          => (isset($this->editDescriptionMediaLink) ? $this->editDescriptionMediaLink : null),
            'edit_settings_link'                   => (isset($this->editSettingsLink) ? $this->editSettingsLink : null),
        ];
    }
}

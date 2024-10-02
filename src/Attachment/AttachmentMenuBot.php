<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Attachment;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a bot, which can be added to attachment or side menu.
 */
class AttachmentMenuBot extends TdObject
{
    public const TYPE_NAME = 'attachmentMenuBot';

    public function __construct(
        /**
         * User identifier of the bot.
         */
        protected int                     $botUserId,
        /**
         * True, if the bot supports opening from attachment menu in the chat with the bot.
         */
        protected bool                    $supportsSelfChat,
        /**
         * True, if the bot supports opening from attachment menu in private chats with ordinary users.
         */
        protected bool                    $supportsUserChats,
        /**
         * True, if the bot supports opening from attachment menu in private chats with other bots.
         */
        protected bool                    $supportsBotChats,
        /**
         * True, if the bot supports opening from attachment menu in basic group and supergroup chats.
         */
        protected bool                    $supportsGroupChats,
        /**
         * True, if the bot supports opening from attachment menu in channel chats.
         */
        protected bool                    $supportsChannelChats,
        /**
         * True, if the user must be asked for the permission to send messages to the bot.
         */
        protected bool                    $requestWriteAccess,
        /**
         * True, if the bot was explicitly added by the user. If the bot isn't added, then on the first bot launch toggleBotIsAddedToAttachmentMenu must be called and the bot must be added or removed.
         */
        protected bool                    $isAdded,
        /**
         * True, if the bot must be shown in the attachment menu.
         */
        protected bool                    $showInAttachmentMenu,
        /**
         * True, if the bot must be shown in the side menu.
         */
        protected bool                    $showInSideMenu,
        /**
         * True, if a disclaimer, why the bot is shown in the side menu, is needed.
         */
        protected bool                    $showDisclaimerInSideMenu,
        /**
         * Name for the bot in attachment menu.
         */
        protected string                  $name,
        /**
         * Color to highlight selected name of the bot if appropriate; may be null.
         */
        protected ?AttachmentMenuBotColor $nameColor,
        /**
         * Default icon for the bot in SVG format; may be null.
         */
        protected ?File                   $defaultIcon,
        /**
         * Icon for the bot in SVG format for the official iOS app; may be null.
         */
        protected ?File                   $iosStaticIcon,
        /**
         * Icon for the bot in TGS format for the official iOS app; may be null.
         */
        protected ?File                   $iosAnimatedIcon,
        /**
         * Icon for the bot in PNG format for the official iOS app side menu; may be null.
         */
        protected ?File                   $iosSideMenuIcon,
        /**
         * Icon for the bot in TGS format for the official Android app; may be null.
         */
        protected ?File                   $androidIcon,
        /**
         * Icon for the bot in SVG format for the official Android app side menu; may be null.
         */
        protected ?File                   $androidSideMenuIcon,
        /**
         * Icon for the bot in TGS format for the official native macOS app; may be null.
         */
        protected ?File                   $macosIcon,
        /**
         * Icon for the bot in PNG format for the official macOS app side menu; may be null.
         */
        protected ?File                   $macosSideMenuIcon,
        /**
         * Color to highlight selected icon of the bot if appropriate; may be null.
         */
        protected ?AttachmentMenuBotColor $iconColor,
        /**
         * Default placeholder for opened Web Apps in SVG format; may be null.
         */
        protected ?File                   $webAppPlaceholder,
    ) {}

    public static function fromArray(array $array): AttachmentMenuBot
    {
        return new static(
            $array['bot_user_id'],
            $array['supports_self_chat'],
            $array['supports_user_chats'],
            $array['supports_bot_chats'],
            $array['supports_group_chats'],
            $array['supports_channel_chats'],
            $array['request_write_access'],
            $array['is_added'],
            $array['show_in_attachment_menu'],
            $array['show_in_side_menu'],
            $array['show_disclaimer_in_side_menu'],
            $array['name'],
            isset($array['name_color']) ? TdSchemaRegistry::fromArray($array['name_color']) : null,
            isset($array['default_icon']) ? TdSchemaRegistry::fromArray($array['default_icon']) : null,
            isset($array['ios_static_icon']) ? TdSchemaRegistry::fromArray($array['ios_static_icon']) : null,
            isset($array['ios_animated_icon']) ? TdSchemaRegistry::fromArray($array['ios_animated_icon']) : null,
            isset($array['ios_side_menu_icon']) ? TdSchemaRegistry::fromArray($array['ios_side_menu_icon']) : null,
            isset($array['android_icon']) ? TdSchemaRegistry::fromArray($array['android_icon']) : null,
            isset($array['android_side_menu_icon']) ? TdSchemaRegistry::fromArray($array['android_side_menu_icon']) : null,
            isset($array['macos_icon']) ? TdSchemaRegistry::fromArray($array['macos_icon']) : null,
            isset($array['macos_side_menu_icon']) ? TdSchemaRegistry::fromArray($array['macos_side_menu_icon']) : null,
            isset($array['icon_color']) ? TdSchemaRegistry::fromArray($array['icon_color']) : null,
            isset($array['web_app_placeholder']) ? TdSchemaRegistry::fromArray($array['web_app_placeholder']) : null,
        );
    }

    public function getAndroidIcon(): ?File
    {
        return $this->androidIcon;
    }

    public function getAndroidSideMenuIcon(): ?File
    {
        return $this->androidSideMenuIcon;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getDefaultIcon(): ?File
    {
        return $this->defaultIcon;
    }

    public function getIconColor(): ?AttachmentMenuBotColor
    {
        return $this->iconColor;
    }

    public function getIosAnimatedIcon(): ?File
    {
        return $this->iosAnimatedIcon;
    }

    public function getIosSideMenuIcon(): ?File
    {
        return $this->iosSideMenuIcon;
    }

    public function getIosStaticIcon(): ?File
    {
        return $this->iosStaticIcon;
    }

    public function getIsAdded(): bool
    {
        return $this->isAdded;
    }

    public function getMacosIcon(): ?File
    {
        return $this->macosIcon;
    }

    public function getMacosSideMenuIcon(): ?File
    {
        return $this->macosSideMenuIcon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNameColor(): ?AttachmentMenuBotColor
    {
        return $this->nameColor;
    }

    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    public function getShowDisclaimerInSideMenu(): bool
    {
        return $this->showDisclaimerInSideMenu;
    }

    public function getShowInAttachmentMenu(): bool
    {
        return $this->showInAttachmentMenu;
    }

    public function getShowInSideMenu(): bool
    {
        return $this->showInSideMenu;
    }

    public function getSupportsBotChats(): bool
    {
        return $this->supportsBotChats;
    }

    public function getSupportsChannelChats(): bool
    {
        return $this->supportsChannelChats;
    }

    public function getSupportsGroupChats(): bool
    {
        return $this->supportsGroupChats;
    }

    public function getSupportsSelfChat(): bool
    {
        return $this->supportsSelfChat;
    }

    public function getSupportsUserChats(): bool
    {
        return $this->supportsUserChats;
    }

    public function getWebAppPlaceholder(): ?File
    {
        return $this->webAppPlaceholder;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'bot_user_id'                  => $this->botUserId,
            'supports_self_chat'           => $this->supportsSelfChat,
            'supports_user_chats'          => $this->supportsUserChats,
            'supports_bot_chats'           => $this->supportsBotChats,
            'supports_group_chats'         => $this->supportsGroupChats,
            'supports_channel_chats'       => $this->supportsChannelChats,
            'request_write_access'         => $this->requestWriteAccess,
            'is_added'                     => $this->isAdded,
            'show_in_attachment_menu'      => $this->showInAttachmentMenu,
            'show_in_side_menu'            => $this->showInSideMenu,
            'show_disclaimer_in_side_menu' => $this->showDisclaimerInSideMenu,
            'name'                         => $this->name,
            'name_color'                   => (isset($this->nameColor) ? $this->nameColor : null),
            'default_icon'                 => (isset($this->defaultIcon) ? $this->defaultIcon : null),
            'ios_static_icon'              => (isset($this->iosStaticIcon) ? $this->iosStaticIcon : null),
            'ios_animated_icon'            => (isset($this->iosAnimatedIcon) ? $this->iosAnimatedIcon : null),
            'ios_side_menu_icon'           => (isset($this->iosSideMenuIcon) ? $this->iosSideMenuIcon : null),
            'android_icon'                 => (isset($this->androidIcon) ? $this->androidIcon : null),
            'android_side_menu_icon'       => (isset($this->androidSideMenuIcon) ? $this->androidSideMenuIcon : null),
            'macos_icon'                   => (isset($this->macosIcon) ? $this->macosIcon : null),
            'macos_side_menu_icon'         => (isset($this->macosSideMenuIcon) ? $this->macosSideMenuIcon : null),
            'icon_color'                   => (isset($this->iconColor) ? $this->iconColor : null),
            'web_app_placeholder'          => (isset($this->webAppPlaceholder) ? $this->webAppPlaceholder : null),
        ];
    }
}

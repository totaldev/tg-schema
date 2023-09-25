<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Attachment;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a bot, which can be added to attachment or side menu
 */
class AttachmentMenuBot extends TdObject
{
    public const TYPE_NAME = 'attachmentMenuBot';

    /**
     * Icon for the bot in TGS format for the official Android app; may be null
     *
     * @var File|null
     */
    protected ?File $androidIcon;

    /**
     * Icon for the bot in SVG format for the official Android app side menu; may be null
     *
     * @var File|null
     */
    protected ?File $androidSideMenuIcon;

    /**
     * User identifier of the bot
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Default icon for the bot in SVG format; may be null
     *
     * @var File|null
     */
    protected ?File $defaultIcon;

    /**
     * Color to highlight selected icon of the bot if appropriate; may be null
     *
     * @var AttachmentMenuBotColor|null
     */
    protected ?AttachmentMenuBotColor $iconColor;

    /**
     * Icon for the bot in TGS format for the official iOS app; may be null
     *
     * @var File|null
     */
    protected ?File $iosAnimatedIcon;

    /**
     * Icon for the bot in PNG format for the official iOS app side menu; may be null
     *
     * @var File|null
     */
    protected ?File $iosSideMenuIcon;

    /**
     * Icon for the bot in SVG format for the official iOS app; may be null
     *
     * @var File|null
     */
    protected ?File $iosStaticIcon;

    /**
     * True, if the bot was explicitly added by the user. If the bot isn't added, then on the first bot launch toggleBotIsAddedToAttachmentMenu must be called
     * and the bot must be added or removed
     *
     * @var bool
     */
    protected bool $isAdded;

    /**
     * Icon for the bot in TGS format for the official native macOS app; may be null
     *
     * @var File|null
     */
    protected ?File $macosIcon;

    /**
     * Icon for the bot in PNG format for the official macOS app side menu; may be null
     *
     * @var File|null
     */
    protected ?File $macosSideMenuIcon;

    /**
     * Name for the bot in attachment menu
     *
     * @var string
     */
    protected string $name;

    /**
     * Color to highlight selected name of the bot if appropriate; may be null
     *
     * @var AttachmentMenuBotColor|null
     */
    protected ?AttachmentMenuBotColor $nameColor;

    /**
     * True, if the user must be asked for the permission to send messages to the bot
     *
     * @var bool
     */
    protected bool $requestWriteAccess;

    /**
     * True, if a disclaimer, why the bot is shown in the side menu, is needed
     *
     * @var bool
     */
    protected bool $showDisclaimerInSideMenu;

    /**
     * True, if the bot must be shown in the attachment menu
     *
     * @var bool
     */
    protected bool $showInAttachmentMenu;

    /**
     * True, if the bot must be shown in the side menu
     *
     * @var bool
     */
    protected bool $showInSideMenu;

    /**
     * True, if the bot supports opening from attachment menu in private chats with other bots
     *
     * @var bool
     */
    protected bool $supportsBotChats;

    /**
     * True, if the bot supports opening from attachment menu in channel chats
     *
     * @var bool
     */
    protected bool $supportsChannelChats;

    /**
     * True, if the bot supports opening from attachment menu in basic group and supergroup chats
     *
     * @var bool
     */
    protected bool $supportsGroupChats;

    /**
     * True, if the bot supports opening from attachment menu in the chat with the bot
     *
     * @var bool
     */
    protected bool $supportsSelfChat;

    /**
     * True, if the bot supports "settings_button_pressed" event
     *
     * @var bool
     */
    protected bool $supportsSettings;

    /**
     * True, if the bot supports opening from attachment menu in private chats with ordinary users
     *
     * @var bool
     */
    protected bool $supportsUserChats;

    /**
     * Default placeholder for opened Web Apps in SVG format; may be null
     *
     * @var File|null
     */
    protected ?File $webAppPlaceholder;

    public function __construct(
        int                     $botUserId,
        bool                    $supportsSelfChat,
        bool                    $supportsUserChats,
        bool                    $supportsBotChats,
        bool                    $supportsGroupChats,
        bool                    $supportsChannelChats,
        bool                    $supportsSettings,
        bool                    $requestWriteAccess,
        bool                    $isAdded,
        bool                    $showInAttachmentMenu,
        bool                    $showInSideMenu,
        bool                    $showDisclaimerInSideMenu,
        string                  $name,
        ?AttachmentMenuBotColor $nameColor,
        ?File                   $defaultIcon,
        ?File                   $iosStaticIcon,
        ?File                   $iosAnimatedIcon,
        ?File                   $iosSideMenuIcon,
        ?File                   $androidIcon,
        ?File                   $androidSideMenuIcon,
        ?File                   $macosIcon,
        ?File                   $macosSideMenuIcon,
        ?AttachmentMenuBotColor $iconColor,
        ?File                   $webAppPlaceholder,
    )
    {
        $this->botUserId = $botUserId;
        $this->supportsSelfChat = $supportsSelfChat;
        $this->supportsUserChats = $supportsUserChats;
        $this->supportsBotChats = $supportsBotChats;
        $this->supportsGroupChats = $supportsGroupChats;
        $this->supportsChannelChats = $supportsChannelChats;
        $this->supportsSettings = $supportsSettings;
        $this->requestWriteAccess = $requestWriteAccess;
        $this->isAdded = $isAdded;
        $this->showInAttachmentMenu = $showInAttachmentMenu;
        $this->showInSideMenu = $showInSideMenu;
        $this->showDisclaimerInSideMenu = $showDisclaimerInSideMenu;
        $this->name = $name;
        $this->nameColor = $nameColor;
        $this->defaultIcon = $defaultIcon;
        $this->iosStaticIcon = $iosStaticIcon;
        $this->iosAnimatedIcon = $iosAnimatedIcon;
        $this->iosSideMenuIcon = $iosSideMenuIcon;
        $this->androidIcon = $androidIcon;
        $this->androidSideMenuIcon = $androidSideMenuIcon;
        $this->macosIcon = $macosIcon;
        $this->macosSideMenuIcon = $macosSideMenuIcon;
        $this->iconColor = $iconColor;
        $this->webAppPlaceholder = $webAppPlaceholder;
    }

    public static function fromArray(array $array): AttachmentMenuBot
    {
        return new static(
            $array['bot_user_id'],
            $array['supports_self_chat'],
            $array['supports_user_chats'],
            $array['supports_bot_chats'],
            $array['supports_group_chats'],
            $array['supports_channel_chats'],
            $array['supports_settings'],
            $array['request_write_access'],
            $array['is_added'],
            $array['show_in_attachment_menu'],
            $array['show_in_side_menu'],
            $array['show_disclaimer_in_side_menu'],
            $array['name'],
            (isset($array['name_color']) ? TdSchemaRegistry::fromArray($array['name_color']) : null),
            (isset($array['default_icon']) ? TdSchemaRegistry::fromArray($array['default_icon']) : null),
            (isset($array['ios_static_icon']) ? TdSchemaRegistry::fromArray($array['ios_static_icon']) : null),
            (isset($array['ios_animated_icon']) ? TdSchemaRegistry::fromArray($array['ios_animated_icon']) : null),
            (isset($array['ios_side_menu_icon']) ? TdSchemaRegistry::fromArray($array['ios_side_menu_icon']) : null),
            (isset($array['android_icon']) ? TdSchemaRegistry::fromArray($array['android_icon']) : null),
            (isset($array['android_side_menu_icon']) ? TdSchemaRegistry::fromArray($array['android_side_menu_icon']) : null),
            (isset($array['macos_icon']) ? TdSchemaRegistry::fromArray($array['macos_icon']) : null),
            (isset($array['macos_side_menu_icon']) ? TdSchemaRegistry::fromArray($array['macos_side_menu_icon']) : null),
            (isset($array['icon_color']) ? TdSchemaRegistry::fromArray($array['icon_color']) : null),
            (isset($array['web_app_placeholder']) ? TdSchemaRegistry::fromArray($array['web_app_placeholder']) : null),
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

    public function getSupportsSettings(): bool
    {
        return $this->supportsSettings;
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
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'supports_self_chat' => $this->supportsSelfChat,
            'supports_user_chats' => $this->supportsUserChats,
            'supports_bot_chats' => $this->supportsBotChats,
            'supports_group_chats' => $this->supportsGroupChats,
            'supports_channel_chats' => $this->supportsChannelChats,
            'supports_settings' => $this->supportsSettings,
            'request_write_access' => $this->requestWriteAccess,
            'is_added' => $this->isAdded,
            'show_in_attachment_menu' => $this->showInAttachmentMenu,
            'show_in_side_menu' => $this->showInSideMenu,
            'show_disclaimer_in_side_menu' => $this->showDisclaimerInSideMenu,
            'name' => $this->name,
            'name_color' => (isset($this->nameColor) ? $this->nameColor : null),
            'default_icon' => (isset($this->defaultIcon) ? $this->defaultIcon : null),
            'ios_static_icon' => (isset($this->iosStaticIcon) ? $this->iosStaticIcon : null),
            'ios_animated_icon' => (isset($this->iosAnimatedIcon) ? $this->iosAnimatedIcon : null),
            'ios_side_menu_icon' => (isset($this->iosSideMenuIcon) ? $this->iosSideMenuIcon : null),
            'android_icon' => (isset($this->androidIcon) ? $this->androidIcon : null),
            'android_side_menu_icon' => (isset($this->androidSideMenuIcon) ? $this->androidSideMenuIcon : null),
            'macos_icon' => (isset($this->macosIcon) ? $this->macosIcon : null),
            'macos_side_menu_icon' => (isset($this->macosSideMenuIcon) ? $this->macosSideMenuIcon : null),
            'icon_color' => (isset($this->iconColor) ? $this->iconColor : null),
            'web_app_placeholder' => (isset($this->webAppPlaceholder) ? $this->webAppPlaceholder : null),
        ];
    }
}

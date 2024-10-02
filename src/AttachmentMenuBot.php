<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents a bot, which can be added to attachment menu
 */
class AttachmentMenuBot extends TdObject
{
    public const TYPE_NAME = 'attachmentMenuBot';

    /**
     * User identifier of the bot added to attachment menu
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * True, if the bot supports opening from attachment menu in the chat with the bot
     *
     * @var bool
     */
    protected bool $supportsSelfChat;

    /**
     * True, if the bot supports opening from attachment menu in private chats with ordinary users
     *
     * @var bool
     */
    protected bool $supportsUserChats;

    /**
     * True, if the bot supports opening from attachment menu in private chats with other bots
     *
     * @var bool
     */
    protected bool $supportsBotChats;

    /**
     * True, if the bot supports opening from attachment menu in basic group and supergroup chats
     *
     * @var bool
     */
    protected bool $supportsGroupChats;

    /**
     * True, if the bot supports opening from attachment menu in channel chats
     *
     * @var bool
     */
    protected bool $supportsChannelChats;

    /**
     * True, if the bot supports "settings_button_pressed" event
     *
     * @var bool
     */
    protected bool $supportsSettings;

    /**
     * True, if the user must be asked for the permission to the bot to send them messages
     *
     * @var bool
     */
    protected bool $requestWriteAccess;

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
     * Default attachment menu icon for the bot in SVG format; may be null
     *
     * @var File|null
     */
    protected ?File $defaultIcon;

    /**
     * Attachment menu icon for the bot in SVG format for the official iOS app; may be null
     *
     * @var File|null
     */
    protected ?File $iosStaticIcon;

    /**
     * Attachment menu icon for the bot in TGS format for the official iOS app; may be null
     *
     * @var File|null
     */
    protected ?File $iosAnimatedIcon;

    /**
     * Attachment menu icon for the bot in TGS format for the official Android app; may be null
     *
     * @var File|null
     */
    protected ?File $androidIcon;

    /**
     * Attachment menu icon for the bot in TGS format for the official native macOS app; may be null
     *
     * @var File|null
     */
    protected ?File $macosIcon;

    /**
     * Color to highlight selected icon of the bot if appropriate; may be null
     *
     * @var AttachmentMenuBotColor|null
     */
    protected ?AttachmentMenuBotColor $iconColor;

    /**
     * Default placeholder for opened Web Apps in SVG format; may be null
     *
     * @var File|null
     */
    protected ?File $webAppPlaceholder;

    public function __construct(
        int $botUserId,
        bool $supportsSelfChat,
        bool $supportsUserChats,
        bool $supportsBotChats,
        bool $supportsGroupChats,
        bool $supportsChannelChats,
        bool $supportsSettings,
        bool $requestWriteAccess,
        string $name,
        ?AttachmentMenuBotColor $nameColor,
        ?File $defaultIcon,
        ?File $iosStaticIcon,
        ?File $iosAnimatedIcon,
        ?File $androidIcon,
        ?File $macosIcon,
        ?AttachmentMenuBotColor $iconColor,
        ?File $webAppPlaceholder
    ) {
        $this->botUserId = $botUserId;
        $this->supportsSelfChat = $supportsSelfChat;
        $this->supportsUserChats = $supportsUserChats;
        $this->supportsBotChats = $supportsBotChats;
        $this->supportsGroupChats = $supportsGroupChats;
        $this->supportsChannelChats = $supportsChannelChats;
        $this->supportsSettings = $supportsSettings;
        $this->requestWriteAccess = $requestWriteAccess;
        $this->name = $name;
        $this->nameColor = $nameColor;
        $this->defaultIcon = $defaultIcon;
        $this->iosStaticIcon = $iosStaticIcon;
        $this->iosAnimatedIcon = $iosAnimatedIcon;
        $this->androidIcon = $androidIcon;
        $this->macosIcon = $macosIcon;
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
            $array['name'],
            (isset($array['name_color']) ? TdSchemaRegistry::fromArray($array['name_color']) : null),
            (isset($array['default_icon']) ? TdSchemaRegistry::fromArray($array['default_icon']) : null),
            (isset($array['ios_static_icon']) ? TdSchemaRegistry::fromArray($array['ios_static_icon']) : null),
            (isset($array['ios_animated_icon']) ? TdSchemaRegistry::fromArray($array['ios_animated_icon']) : null),
            (isset($array['android_icon']) ? TdSchemaRegistry::fromArray($array['android_icon']) : null),
            (isset($array['macos_icon']) ? TdSchemaRegistry::fromArray($array['macos_icon']) : null),
            (isset($array['icon_color']) ? TdSchemaRegistry::fromArray($array['icon_color']) : null),
            (isset($array['web_app_placeholder']) ? TdSchemaRegistry::fromArray($array['web_app_placeholder']) : null),
        );
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
            'name' => $this->name,
            'name_color' => (isset($this->nameColor) ? $this->nameColor : null),
            'default_icon' => (isset($this->defaultIcon) ? $this->defaultIcon : null),
            'ios_static_icon' => (isset($this->iosStaticIcon) ? $this->iosStaticIcon : null),
            'ios_animated_icon' => (isset($this->iosAnimatedIcon) ? $this->iosAnimatedIcon : null),
            'android_icon' => (isset($this->androidIcon) ? $this->androidIcon : null),
            'macos_icon' => (isset($this->macosIcon) ? $this->macosIcon : null),
            'icon_color' => (isset($this->iconColor) ? $this->iconColor : null),
            'web_app_placeholder' => (isset($this->webAppPlaceholder) ? $this->webAppPlaceholder : null),
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getSupportsSelfChat(): bool
    {
        return $this->supportsSelfChat;
    }

    public function getSupportsUserChats(): bool
    {
        return $this->supportsUserChats;
    }

    public function getSupportsBotChats(): bool
    {
        return $this->supportsBotChats;
    }

    public function getSupportsGroupChats(): bool
    {
        return $this->supportsGroupChats;
    }

    public function getSupportsChannelChats(): bool
    {
        return $this->supportsChannelChats;
    }

    public function getSupportsSettings(): bool
    {
        return $this->supportsSettings;
    }

    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNameColor(): ?AttachmentMenuBotColor
    {
        return $this->nameColor;
    }

    public function getDefaultIcon(): ?File
    {
        return $this->defaultIcon;
    }

    public function getIosStaticIcon(): ?File
    {
        return $this->iosStaticIcon;
    }

    public function getIosAnimatedIcon(): ?File
    {
        return $this->iosAnimatedIcon;
    }

    public function getAndroidIcon(): ?File
    {
        return $this->androidIcon;
    }

    public function getMacosIcon(): ?File
    {
        return $this->macosIcon;
    }

    public function getIconColor(): ?AttachmentMenuBotColor
    {
        return $this->iconColor;
    }

    public function getWebAppPlaceholder(): ?File
    {
        return $this->webAppPlaceholder;
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\Affiliate\AffiliateProgramInfo;
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
    public const string TYPE_NAME = 'botInfo';

    public function __construct(
        /**
         * Information about the affiliate program of the bot; may be null if none.
         */
        protected ?AffiliateProgramInfo      $affiliateProgram,
        /**
         * Animation shown in the chat with the bot if the chat is empty; may be null.
         */
        protected ?Animation                 $animation,
        /**
         * True, if the bot's revenue statistics are available to the current user.
         */
        protected bool                       $canGetRevenueStatistics,
        /**
         * True, if the bot can manage emoji status of the current user.
         */
        protected bool                       $canManageEmojiStatus,
        /**
         * List of the bot commands.
         *
         * @var BotCommand[]
         */
        protected array                      $commands,
        /**
         * Default administrator rights for adding the bot to channels; may be null.
         */
        protected ?ChatAdministratorRights   $defaultChannelAdministratorRights,
        /**
         * Default administrator rights for adding the bot to basic group and supergroup chats; may be null.
         */
        protected ?ChatAdministratorRights   $defaultGroupAdministratorRights,
        /**
         * The text shown in the chat with the bot if the chat is empty.
         */
        protected string                     $description,
        /**
         * The internal link, which can be used to edit bot commands; may be null.
         */
        protected ?InternalLinkType          $editCommandsLink,
        /**
         * The internal link, which can be used to edit bot description; may be null.
         */
        protected ?InternalLinkType          $editDescriptionLink,
        /**
         * The internal link, which can be used to edit the photo or animation shown in the chat with the bot if the chat is empty; may be null.
         */
        protected ?InternalLinkType          $editDescriptionMediaLink,
        /**
         * The internal link, which can be used to edit bot settings; may be null.
         */
        protected ?InternalLinkType          $editSettingsLink,
        /**
         * True, if the bot has media previews.
         */
        protected bool                       $hasMediaPreviews,
        /**
         * Identifier of the bot, which manages the bot; 0 if none or unknown; for owner of the bot only.
         */
        protected int                        $managerBotUserId,
        /**
         * Information about a button to show instead of the bot commands menu button; may be null if ordinary bot commands menu must be shown.
         */
        protected ?BotMenuButton             $menuButton,
        /**
         * Photo shown in the chat with the bot if the chat is empty; may be null.
         */
        protected ?Photo                     $photo,
        /**
         * The HTTP link to the privacy policy of the bot. If empty, then /privacy command must be used if supported by the bot. If the command isn't supported, then https://telegram.org/privacy-tpa must be opened.
         */
        protected string                     $privacyPolicyUrl,
        /**
         * The text that is shown on the bot's profile page and is sent together with the link when users share the bot.
         */
        protected string                     $shortDescription,
        /**
         * Parameters of the verification that can be provided by the bot; may be null if none or the current user isn't the owner of the bot.
         */
        protected ?BotVerificationParameters $verificationParameters,
        /**
         * Default dark background color for bot Web Apps; -1 if not specified.
         */
        protected int                        $webAppBackgroundDarkColor,
        /**
         * Default light background color for bot Web Apps; -1 if not specified.
         */
        protected int                        $webAppBackgroundLightColor,
        /**
         * Default dark header color for bot Web Apps; -1 if not specified.
         */
        protected int                        $webAppHeaderDarkColor,
        /**
         * Default light header color for bot Web Apps; -1 if not specified.
         */
        protected int                        $webAppHeaderLightColor,
    ) {}

    public static function fromArray(array $array): BotInfo
    {
        return new static(
            affiliateProgram                 : (isset($array['affiliate_program']) ? TdSchemaRegistry::fromArray($array['affiliate_program']) : null),
            animation                        : (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
            canGetRevenueStatistics          : $array['can_get_revenue_statistics'],
            canManageEmojiStatus             : $array['can_manage_emoji_status'],
            commands                         : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
            defaultChannelAdministratorRights: (isset($array['default_channel_administrator_rights']) ? TdSchemaRegistry::fromArray(
                $array['default_channel_administrator_rights']
            ) : null),
            defaultGroupAdministratorRights  : (isset($array['default_group_administrator_rights']) ? TdSchemaRegistry::fromArray(
                $array['default_group_administrator_rights']
            ) : null),
            description                      : $array['description'],
            editCommandsLink                 : (isset($array['edit_commands_link']) ? TdSchemaRegistry::fromArray($array['edit_commands_link']) : null),
            editDescriptionLink              : (isset($array['edit_description_link']) ? TdSchemaRegistry::fromArray($array['edit_description_link']) : null),
            editDescriptionMediaLink         : (isset($array['edit_description_media_link']) ? TdSchemaRegistry::fromArray(
                $array['edit_description_media_link']
            ) : null),
            editSettingsLink                 : (isset($array['edit_settings_link']) ? TdSchemaRegistry::fromArray($array['edit_settings_link']) : null),
            hasMediaPreviews                 : $array['has_media_previews'],
            managerBotUserId                 : $array['manager_bot_user_id'],
            menuButton                       : (isset($array['menu_button']) ? TdSchemaRegistry::fromArray($array['menu_button']) : null),
            photo                            : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            privacyPolicyUrl                 : $array['privacy_policy_url'],
            shortDescription                 : $array['short_description'],
            verificationParameters           : (isset($array['verification_parameters']) ? TdSchemaRegistry::fromArray(
                $array['verification_parameters']
            ) : null),
            webAppBackgroundDarkColor        : $array['web_app_background_dark_color'],
            webAppBackgroundLightColor       : $array['web_app_background_light_color'],
            webAppHeaderDarkColor            : $array['web_app_header_dark_color'],
            webAppHeaderLightColor           : $array['web_app_header_light_color'],
        );
    }

    public function getAffiliateProgram(): ?AffiliateProgramInfo
    {
        return $this->affiliateProgram;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    public function getCanGetRevenueStatistics(): bool
    {
        return $this->canGetRevenueStatistics;
    }

    public function getCanManageEmojiStatus(): bool
    {
        return $this->canManageEmojiStatus;
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

    public function getManagerBotUserId(): int
    {
        return $this->managerBotUserId;
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

    public function getVerificationParameters(): ?BotVerificationParameters
    {
        return $this->verificationParameters;
    }

    public function getWebAppBackgroundDarkColor(): int
    {
        return $this->webAppBackgroundDarkColor;
    }

    public function getWebAppBackgroundLightColor(): int
    {
        return $this->webAppBackgroundLightColor;
    }

    public function getWebAppHeaderDarkColor(): int
    {
        return $this->webAppHeaderDarkColor;
    }

    public function getWebAppHeaderLightColor(): int
    {
        return $this->webAppHeaderLightColor;
    }

    public function setAffiliateProgram(?AffiliateProgramInfo $value): static
    {
        $this->affiliateProgram = $value;

        return $this;
    }

    public function setAnimation(?Animation $value): static
    {
        $this->animation = $value;

        return $this;
    }

    public function setCanGetRevenueStatistics(bool $value): static
    {
        $this->canGetRevenueStatistics = $value;

        return $this;
    }

    public function setCanManageEmojiStatus(bool $value): static
    {
        $this->canManageEmojiStatus = $value;

        return $this;
    }

    public function setCommands(array $value): static
    {
        $this->commands = $value;

        return $this;
    }

    public function setDefaultChannelAdministratorRights(?ChatAdministratorRights $value): static
    {
        $this->defaultChannelAdministratorRights = $value;

        return $this;
    }

    public function setDefaultGroupAdministratorRights(?ChatAdministratorRights $value): static
    {
        $this->defaultGroupAdministratorRights = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setEditCommandsLink(?InternalLinkType $value): static
    {
        $this->editCommandsLink = $value;

        return $this;
    }

    public function setEditDescriptionLink(?InternalLinkType $value): static
    {
        $this->editDescriptionLink = $value;

        return $this;
    }

    public function setEditDescriptionMediaLink(?InternalLinkType $value): static
    {
        $this->editDescriptionMediaLink = $value;

        return $this;
    }

    public function setEditSettingsLink(?InternalLinkType $value): static
    {
        $this->editSettingsLink = $value;

        return $this;
    }

    public function setHasMediaPreviews(bool $value): static
    {
        $this->hasMediaPreviews = $value;

        return $this;
    }

    public function setManagerBotUserId(int $value): static
    {
        $this->managerBotUserId = $value;

        return $this;
    }

    public function setMenuButton(?BotMenuButton $value): static
    {
        $this->menuButton = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setPrivacyPolicyUrl(string $value): static
    {
        $this->privacyPolicyUrl = $value;

        return $this;
    }

    public function setShortDescription(string $value): static
    {
        $this->shortDescription = $value;

        return $this;
    }

    public function setVerificationParameters(?BotVerificationParameters $value): static
    {
        $this->verificationParameters = $value;

        return $this;
    }

    public function setWebAppBackgroundDarkColor(int $value): static
    {
        $this->webAppBackgroundDarkColor = $value;

        return $this;
    }

    public function setWebAppBackgroundLightColor(int $value): static
    {
        $this->webAppBackgroundLightColor = $value;

        return $this;
    }

    public function setWebAppHeaderDarkColor(int $value): static
    {
        $this->webAppHeaderDarkColor = $value;

        return $this;
    }

    public function setWebAppHeaderLightColor(int $value): static
    {
        $this->webAppHeaderLightColor = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                => static::TYPE_NAME,
            'affiliate_program'                    => (null !== $this->affiliateProgram ? $this->affiliateProgram->jsonSerialize() : null),
            'animation'                            => (null !== $this->animation ? $this->animation->jsonSerialize() : null),
            'can_get_revenue_statistics'           => $this->canGetRevenueStatistics,
            'can_manage_emoji_status'              => $this->canManageEmojiStatus,
            'commands'                             => array_map(static fn($x) => $x->jsonSerialize(), $this->commands),
            'default_channel_administrator_rights' => (null !== $this->defaultChannelAdministratorRights ? $this->defaultChannelAdministratorRights->jsonSerialize(
            ) : null),
            'default_group_administrator_rights'   => (null !== $this->defaultGroupAdministratorRights ? $this->defaultGroupAdministratorRights->jsonSerialize(
            ) : null),
            'description'                          => $this->description,
            'edit_commands_link'                   => (null !== $this->editCommandsLink ? $this->editCommandsLink->jsonSerialize() : null),
            'edit_description_link'                => (null !== $this->editDescriptionLink ? $this->editDescriptionLink->jsonSerialize() : null),
            'edit_description_media_link'          => (null !== $this->editDescriptionMediaLink ? $this->editDescriptionMediaLink->jsonSerialize() : null),
            'edit_settings_link'                   => (null !== $this->editSettingsLink ? $this->editSettingsLink->jsonSerialize() : null),
            'has_media_previews'                   => $this->hasMediaPreviews,
            'manager_bot_user_id'                  => $this->managerBotUserId,
            'menu_button'                          => (null !== $this->menuButton ? $this->menuButton->jsonSerialize() : null),
            'photo'                                => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'privacy_policy_url'                   => $this->privacyPolicyUrl,
            'short_description'                    => $this->shortDescription,
            'verification_parameters'              => (null !== $this->verificationParameters ? $this->verificationParameters->jsonSerialize() : null),
            'web_app_background_dark_color'        => $this->webAppBackgroundDarkColor,
            'web_app_background_light_color'       => $this->webAppBackgroundLightColor,
            'web_app_header_dark_color'            => $this->webAppHeaderDarkColor,
            'web_app_header_light_color'           => $this->webAppHeaderLightColor,
        ];
    }
}

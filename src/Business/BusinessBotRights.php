<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Describes rights of a business bot.
 */
class BusinessBotRights extends TdObject
{
    public const TYPE_NAME = 'businessBotRights';

    public function __construct(
        /**
         * True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours.
         */
        protected bool $canReply,
        /**
         * True, if the bot can mark incoming private messages as read.
         */
        protected bool $canReadMessages,
        /**
         * True, if the bot can delete sent messages.
         */
        protected bool $canDeleteSentMessages,
        /**
         * True, if the bot can delete any message.
         */
        protected bool $canDeleteAllMessages,
        /**
         * True, if the bot can edit name of the business account.
         */
        protected bool $canEditName,
        /**
         * True, if the bot can edit bio of the business account.
         */
        protected bool $canEditBio,
        /**
         * True, if the bot can edit profile photo of the business account.
         */
        protected bool $canEditProfilePhoto,
        /**
         * True, if the bot can edit username of the business account.
         */
        protected bool $canEditUsername,
        /**
         * True, if the bot can view gifts and amount of Telegram Stars owned by the business account.
         */
        protected bool $canViewGiftsAndStars,
        /**
         * True, if the bot can sell regular gifts received by the business account.
         */
        protected bool $canSellGifts,
        /**
         * True, if the bot can change gift receiving settings of the business account.
         */
        protected bool $canChangeGiftSettings,
        /**
         * True, if the bot can transfer and upgrade gifts received by the business account.
         */
        protected bool $canTransferAndUpgradeGifts,
        /**
         * True, if the bot can transfer Telegram Stars received by the business account to account of the bot, or use them to upgrade and transfer gifts.
         */
        protected bool $canTransferStars,
        /**
         * True, if the bot can post, edit and delete stories.
         */
        protected bool $canManageStories,
    ) {}

    public static function fromArray(array $array): BusinessBotRights
    {
        return new static(
            $array['can_reply'],
            $array['can_read_messages'],
            $array['can_delete_sent_messages'],
            $array['can_delete_all_messages'],
            $array['can_edit_name'],
            $array['can_edit_bio'],
            $array['can_edit_profile_photo'],
            $array['can_edit_username'],
            $array['can_view_gifts_and_stars'],
            $array['can_sell_gifts'],
            $array['can_change_gift_settings'],
            $array['can_transfer_and_upgrade_gifts'],
            $array['can_transfer_stars'],
            $array['can_manage_stories'],
        );
    }

    public function getCanChangeGiftSettings(): bool
    {
        return $this->canChangeGiftSettings;
    }

    public function getCanDeleteAllMessages(): bool
    {
        return $this->canDeleteAllMessages;
    }

    public function getCanDeleteSentMessages(): bool
    {
        return $this->canDeleteSentMessages;
    }

    public function getCanEditBio(): bool
    {
        return $this->canEditBio;
    }

    public function getCanEditName(): bool
    {
        return $this->canEditName;
    }

    public function getCanEditProfilePhoto(): bool
    {
        return $this->canEditProfilePhoto;
    }

    public function getCanEditUsername(): bool
    {
        return $this->canEditUsername;
    }

    public function getCanManageStories(): bool
    {
        return $this->canManageStories;
    }

    public function getCanReadMessages(): bool
    {
        return $this->canReadMessages;
    }

    public function getCanReply(): bool
    {
        return $this->canReply;
    }

    public function getCanSellGifts(): bool
    {
        return $this->canSellGifts;
    }

    public function getCanTransferAndUpgradeGifts(): bool
    {
        return $this->canTransferAndUpgradeGifts;
    }

    public function getCanTransferStars(): bool
    {
        return $this->canTransferStars;
    }

    public function getCanViewGiftsAndStars(): bool
    {
        return $this->canViewGiftsAndStars;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'can_reply'                      => $this->canReply,
            'can_read_messages'              => $this->canReadMessages,
            'can_delete_sent_messages'       => $this->canDeleteSentMessages,
            'can_delete_all_messages'        => $this->canDeleteAllMessages,
            'can_edit_name'                  => $this->canEditName,
            'can_edit_bio'                   => $this->canEditBio,
            'can_edit_profile_photo'         => $this->canEditProfilePhoto,
            'can_edit_username'              => $this->canEditUsername,
            'can_view_gifts_and_stars'       => $this->canViewGiftsAndStars,
            'can_sell_gifts'                 => $this->canSellGifts,
            'can_change_gift_settings'       => $this->canChangeGiftSettings,
            'can_transfer_and_upgrade_gifts' => $this->canTransferAndUpgradeGifts,
            'can_transfer_stars'             => $this->canTransferStars,
            'can_manage_stories'             => $this->canManageStories,
        ];
    }
}

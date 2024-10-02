<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Birthdate\Birthdate;
use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\Bot\BotInfo;
use Totaldev\TgSchema\Business\BusinessInfo;
use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Premium\PremiumPaymentOption;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains full information about a user.
 */
class UserFullInfo extends TdObject
{
    public const TYPE_NAME = 'userFullInfo';

    public function __construct(
        /**
         * User profile photo set by the current user for the contact; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null, then it is the same photo as in user.profile_photo and chat.photo. This photo isn't returned in the list of user photos.
         */
        protected ?ChatPhoto     $personalPhoto,
        /**
         * User profile photo; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null and personal_photo is null, then it is the same photo as in user.profile_photo and chat.photo.
         */
        protected ?ChatPhoto     $photo,
        /**
         * User profile photo visible if the main photo is hidden by privacy settings; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null and both photo and personal_photo are null, then it is the same photo as in user.profile_photo and chat.photo. This photo isn't returned in the list of user photos.
         */
        protected ?ChatPhoto     $publicPhoto,
        /**
         * Block list to which the user is added; may be null if none.
         */
        protected ?BlockList     $blockList,
        /**
         * True, if the user can be called.
         */
        protected bool           $canBeCalled,
        /**
         * True, if a video call can be created with the user.
         */
        protected bool           $supportsVideoCalls,
        /**
         * True, if the user can't be called due to their privacy settings.
         */
        protected bool           $hasPrivateCalls,
        /**
         * True, if the user can't be linked in forwarded messages due to their privacy settings.
         */
        protected bool           $hasPrivateForwards,
        /**
         * True, if voice and video notes can't be sent or forwarded to the user.
         */
        protected bool           $hasRestrictedVoiceAndVideoNoteMessages,
        /**
         * True, if the user has posted to profile stories.
         */
        protected bool           $hasPostedToProfileStories,
        /**
         * True, if the user always enabled sponsored messages; known only for the current user.
         */
        protected bool           $hasSponsoredMessagesEnabled,
        /**
         * True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used.
         */
        protected bool           $needPhoneNumberPrivacyException,
        /**
         * True, if the user set chat background for both chat users and it wasn't reverted yet.
         */
        protected bool           $setChatBackground,
        /**
         * A short user bio; may be null for bots.
         */
        protected ?FormattedText $bio,
        /**
         * Birthdate of the user; may be null if unknown.
         */
        protected ?Birthdate     $birthdate,
        /**
         * Identifier of the personal chat of the user; 0 if none.
         */
        protected int            $personalChatId,
        /**
         * The list of available options for gifting Telegram Premium to the user.
         *
         * @var PremiumPaymentOption[]
         */
        protected array          $premiumGiftOptions,
        /**
         * Number of group chats where both the other user and the current user are a member; 0 for the current user.
         */
        protected int            $groupInCommonCount,
        /**
         * Information about business settings for Telegram Business accounts; may be null if none.
         */
        protected ?BusinessInfo  $businessInfo,
        /**
         * For bots, information about the bot; may be null if the user isn't a bot.
         */
        protected ?BotInfo       $botInfo,
    ) {}

    public static function fromArray(array $array): UserFullInfo
    {
        return new static(
            isset($array['personal_photo']) ? TdSchemaRegistry::fromArray($array['personal_photo']) : null,
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            isset($array['public_photo']) ? TdSchemaRegistry::fromArray($array['public_photo']) : null,
            isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null,
            $array['can_be_called'],
            $array['supports_video_calls'],
            $array['has_private_calls'],
            $array['has_private_forwards'],
            $array['has_restricted_voice_and_video_note_messages'],
            $array['has_posted_to_profile_stories'],
            $array['has_sponsored_messages_enabled'],
            $array['need_phone_number_privacy_exception'],
            $array['set_chat_background'],
            isset($array['bio']) ? TdSchemaRegistry::fromArray($array['bio']) : null,
            isset($array['birthdate']) ? TdSchemaRegistry::fromArray($array['birthdate']) : null,
            $array['personal_chat_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['premium_gift_options']),
            $array['group_in_common_count'],
            isset($array['business_info']) ? TdSchemaRegistry::fromArray($array['business_info']) : null,
            isset($array['bot_info']) ? TdSchemaRegistry::fromArray($array['bot_info']) : null,
        );
    }

    public function getBio(): ?FormattedText
    {
        return $this->bio;
    }

    public function getBirthdate(): ?Birthdate
    {
        return $this->birthdate;
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }

    public function getBotInfo(): ?BotInfo
    {
        return $this->botInfo;
    }

    public function getBusinessInfo(): ?BusinessInfo
    {
        return $this->businessInfo;
    }

    public function getCanBeCalled(): bool
    {
        return $this->canBeCalled;
    }

    public function getGroupInCommonCount(): int
    {
        return $this->groupInCommonCount;
    }

    public function getHasPostedToProfileStories(): bool
    {
        return $this->hasPostedToProfileStories;
    }

    public function getHasPrivateCalls(): bool
    {
        return $this->hasPrivateCalls;
    }

    public function getHasPrivateForwards(): bool
    {
        return $this->hasPrivateForwards;
    }

    public function getHasRestrictedVoiceAndVideoNoteMessages(): bool
    {
        return $this->hasRestrictedVoiceAndVideoNoteMessages;
    }

    public function getHasSponsoredMessagesEnabled(): bool
    {
        return $this->hasSponsoredMessagesEnabled;
    }

    public function getNeedPhoneNumberPrivacyException(): bool
    {
        return $this->needPhoneNumberPrivacyException;
    }

    public function getPersonalChatId(): int
    {
        return $this->personalChatId;
    }

    public function getPersonalPhoto(): ?ChatPhoto
    {
        return $this->personalPhoto;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getPremiumGiftOptions(): array
    {
        return $this->premiumGiftOptions;
    }

    public function getPublicPhoto(): ?ChatPhoto
    {
        return $this->publicPhoto;
    }

    public function getSetChatBackground(): bool
    {
        return $this->setChatBackground;
    }

    public function getSupportsVideoCalls(): bool
    {
        return $this->supportsVideoCalls;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                        => static::TYPE_NAME,
            'personal_photo'                               => (isset($this->personalPhoto) ? $this->personalPhoto : null),
            'photo'                                        => (isset($this->photo) ? $this->photo : null),
            'public_photo'                                 => (isset($this->publicPhoto) ? $this->publicPhoto : null),
            'block_list'                                   => (isset($this->blockList) ? $this->blockList : null),
            'can_be_called'                                => $this->canBeCalled,
            'supports_video_calls'                         => $this->supportsVideoCalls,
            'has_private_calls'                            => $this->hasPrivateCalls,
            'has_private_forwards'                         => $this->hasPrivateForwards,
            'has_restricted_voice_and_video_note_messages' => $this->hasRestrictedVoiceAndVideoNoteMessages,
            'has_posted_to_profile_stories'                => $this->hasPostedToProfileStories,
            'has_sponsored_messages_enabled'               => $this->hasSponsoredMessagesEnabled,
            'need_phone_number_privacy_exception'          => $this->needPhoneNumberPrivacyException,
            'set_chat_background'                          => $this->setChatBackground,
            'bio'                                          => (isset($this->bio) ? $this->bio : null),
            'birthdate'                                    => (isset($this->birthdate) ? $this->birthdate : null),
            'personal_chat_id'                             => $this->personalChatId,
            array_map(fn($x) => $x->typeSerialize(), $this->premiumGiftOptions),
            'group_in_common_count'                        => $this->groupInCommonCount,
            'business_info'                                => (isset($this->businessInfo) ? $this->businessInfo : null),
            'bot_info'                                     => (isset($this->botInfo) ? $this->botInfo : null),
        ];
    }
}

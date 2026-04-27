<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\Birthdate\Birthdate;
use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\Bot\BotInfo;
use Totaldev\TgSchema\Bot\BotVerification;
use Totaldev\TgSchema\Business\BusinessInfo;
use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Gift\GiftSettings;
use Totaldev\TgSchema\Profile\ProfileTab;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains full information about a user.
 */
class UserFullInfo extends TdObject
{
    public const string TYPE_NAME = 'userFullInfo';

    public function __construct(
        /**
         * A short user bio; may be null for bots.
         */
        protected ?FormattedText   $bio,
        /**
         * Birthdate of the user; may be null if unknown.
         */
        protected ?Birthdate       $birthdate,
        /**
         * Block list to which the user is added; may be null if none.
         */
        protected ?BlockList       $blockList,
        /**
         * For bots, information about the bot; may be null if the user isn't a bot.
         */
        protected ?BotInfo         $botInfo,
        /**
         * Information about verification status of the user provided by a bot; may be null if none or unknown.
         */
        protected ?BotVerification $botVerification,
        /**
         * Information about business settings for Telegram Business accounts; may be null if none.
         */
        protected ?BusinessInfo    $businessInfo,
        /**
         * True, if the user can be called.
         */
        protected bool             $canBeCalled,
        /**
         * The first audio file added to the user's profile; may be null if none.
         */
        protected ?Audio           $firstProfileAudio,
        /**
         * Number of saved to profile gifts for other users or the total number of received gifts for the current user.
         */
        protected int              $giftCount,
        /**
         * Settings for gift receiving for the user.
         */
        protected GiftSettings     $giftSettings,
        /**
         * Number of group chats where both the other user and the current user are a member; 0 for the current user.
         */
        protected int              $groupInCommonCount,
        /**
         * True, if the user has posted to profile stories.
         */
        protected bool             $hasPostedToProfileStories,
        /**
         * True, if the user can't be called due to their privacy settings.
         */
        protected bool             $hasPrivateCalls,
        /**
         * True, if the user can't be linked in forwarded messages due to their privacy settings.
         */
        protected bool             $hasPrivateForwards,
        /**
         * True, if voice and video notes can't be sent or forwarded to the user.
         */
        protected bool             $hasRestrictedVoiceAndVideoNoteMessages,
        /**
         * True, if the user always enabled sponsored messages; known only for the current user.
         */
        protected bool             $hasSponsoredMessagesEnabled,
        /**
         * Number of Telegram Stars that must be paid by the user for each sent message to the current user.
         */
        protected int              $incomingPaidMessageStarCount,
        /**
         * The main tab chosen by the user; may be null if not chosen manually.
         */
        protected ?ProfileTab      $mainProfileTab,
        /**
         * True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used.
         */
        protected bool             $needPhoneNumberPrivacyException,
        /**
         * Note added to the user's contact; may be null if none.
         */
        protected ?FormattedText   $note,
        /**
         * Number of Telegram Stars that must be paid by the current user for each sent message to the user.
         */
        protected int              $outgoingPaidMessageStarCount,
        /**
         * The rating of the user after the next change; may be null if the user isn't the current user or there are no pending rating changes.
         */
        protected ?UserRating      $pendingRating,
        /**
         * Unix timestamp when rating of the user will change to pending_rating; 0 if the user isn't the current user or there are no pending rating changes.
         */
        protected int              $pendingRatingDate,
        /**
         * Identifier of the personal chat of the user; 0 if none.
         */
        protected int              $personalChatId,
        /**
         * User profile photo set by the current user for the contact; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null, then it is the same photo as in user.profile_photo and chat.photo. This photo isn't returned in the list of user photos.
         */
        protected ?ChatPhoto       $personalPhoto,
        /**
         * User profile photo; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null and personal_photo is null, then it is the same photo as in user.profile_photo and chat.photo.
         */
        protected ?ChatPhoto       $photo,
        /**
         * User profile photo visible if the main photo is hidden by privacy settings; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null and both photo and personal_photo are null, then it is the same photo as in user.profile_photo and chat.photo. This photo isn't returned in the list of user photos.
         */
        protected ?ChatPhoto       $publicPhoto,
        /**
         * The current rating of the user; may be null if none.
         */
        protected ?UserRating      $rating,
        /**
         * True, if the user set chat background for both chat users and it wasn't reverted yet.
         */
        protected bool             $setChatBackground,
        /**
         * True, if a video call can be created with the user.
         */
        protected bool             $supportsVideoCalls,
        /**
         * True, if the user uses an unofficial application that poses a security risk.
         */
        protected bool             $usesUnofficialApp,
    ) {}

    public static function fromArray(array $array): UserFullInfo
    {
        return new static(
            bio                                   : (isset($array['bio']) ? TdSchemaRegistry::fromArray($array['bio']) : null),
            birthdate                             : (isset($array['birthdate']) ? TdSchemaRegistry::fromArray($array['birthdate']) : null),
            blockList                             : (isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null),
            botInfo                               : (isset($array['bot_info']) ? TdSchemaRegistry::fromArray($array['bot_info']) : null),
            botVerification                       : (isset($array['bot_verification']) ? TdSchemaRegistry::fromArray($array['bot_verification']) : null),
            businessInfo                          : (isset($array['business_info']) ? TdSchemaRegistry::fromArray($array['business_info']) : null),
            canBeCalled                           : $array['can_be_called'],
            firstProfileAudio                     : (isset($array['first_profile_audio']) ? TdSchemaRegistry::fromArray($array['first_profile_audio']) : null),
            giftCount                             : $array['gift_count'],
            giftSettings                          : TdSchemaRegistry::fromArray($array['gift_settings']),
            groupInCommonCount                    : $array['group_in_common_count'],
            hasPostedToProfileStories             : $array['has_posted_to_profile_stories'],
            hasPrivateCalls                       : $array['has_private_calls'],
            hasPrivateForwards                    : $array['has_private_forwards'],
            hasRestrictedVoiceAndVideoNoteMessages: $array['has_restricted_voice_and_video_note_messages'],
            hasSponsoredMessagesEnabled           : $array['has_sponsored_messages_enabled'],
            incomingPaidMessageStarCount          : $array['incoming_paid_message_star_count'],
            mainProfileTab                        : (isset($array['main_profile_tab']) ? TdSchemaRegistry::fromArray($array['main_profile_tab']) : null),
            needPhoneNumberPrivacyException       : $array['need_phone_number_privacy_exception'],
            note                                  : (isset($array['note']) ? TdSchemaRegistry::fromArray($array['note']) : null),
            outgoingPaidMessageStarCount          : $array['outgoing_paid_message_star_count'],
            pendingRating                         : (isset($array['pending_rating']) ? TdSchemaRegistry::fromArray($array['pending_rating']) : null),
            pendingRatingDate                     : $array['pending_rating_date'],
            personalChatId                        : $array['personal_chat_id'],
            personalPhoto                         : (isset($array['personal_photo']) ? TdSchemaRegistry::fromArray($array['personal_photo']) : null),
            photo                                 : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            publicPhoto                           : (isset($array['public_photo']) ? TdSchemaRegistry::fromArray($array['public_photo']) : null),
            rating                                : (isset($array['rating']) ? TdSchemaRegistry::fromArray($array['rating']) : null),
            setChatBackground                     : $array['set_chat_background'],
            supportsVideoCalls                    : $array['supports_video_calls'],
            usesUnofficialApp                     : $array['uses_unofficial_app'],
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

    public function getBotVerification(): ?BotVerification
    {
        return $this->botVerification;
    }

    public function getBusinessInfo(): ?BusinessInfo
    {
        return $this->businessInfo;
    }

    public function getCanBeCalled(): bool
    {
        return $this->canBeCalled;
    }

    public function getFirstProfileAudio(): ?Audio
    {
        return $this->firstProfileAudio;
    }

    public function getGiftCount(): int
    {
        return $this->giftCount;
    }

    public function getGiftSettings(): GiftSettings
    {
        return $this->giftSettings;
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

    public function getIncomingPaidMessageStarCount(): int
    {
        return $this->incomingPaidMessageStarCount;
    }

    public function getMainProfileTab(): ?ProfileTab
    {
        return $this->mainProfileTab;
    }

    public function getNeedPhoneNumberPrivacyException(): bool
    {
        return $this->needPhoneNumberPrivacyException;
    }

    public function getNote(): ?FormattedText
    {
        return $this->note;
    }

    public function getOutgoingPaidMessageStarCount(): int
    {
        return $this->outgoingPaidMessageStarCount;
    }

    public function getPendingRating(): ?UserRating
    {
        return $this->pendingRating;
    }

    public function getPendingRatingDate(): int
    {
        return $this->pendingRatingDate;
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

    public function getPublicPhoto(): ?ChatPhoto
    {
        return $this->publicPhoto;
    }

    public function getRating(): ?UserRating
    {
        return $this->rating;
    }

    public function getSetChatBackground(): bool
    {
        return $this->setChatBackground;
    }

    public function getSupportsVideoCalls(): bool
    {
        return $this->supportsVideoCalls;
    }

    public function getUsesUnofficialApp(): bool
    {
        return $this->usesUnofficialApp;
    }

    public function setBio(?FormattedText $value): static
    {
        $this->bio = $value;

        return $this;
    }

    public function setBirthdate(?Birthdate $value): static
    {
        $this->birthdate = $value;

        return $this;
    }

    public function setBlockList(?BlockList $value): static
    {
        $this->blockList = $value;

        return $this;
    }

    public function setBotInfo(?BotInfo $value): static
    {
        $this->botInfo = $value;

        return $this;
    }

    public function setBotVerification(?BotVerification $value): static
    {
        $this->botVerification = $value;

        return $this;
    }

    public function setBusinessInfo(?BusinessInfo $value): static
    {
        $this->businessInfo = $value;

        return $this;
    }

    public function setCanBeCalled(bool $value): static
    {
        $this->canBeCalled = $value;

        return $this;
    }

    public function setFirstProfileAudio(?Audio $value): static
    {
        $this->firstProfileAudio = $value;

        return $this;
    }

    public function setGiftCount(int $value): static
    {
        $this->giftCount = $value;

        return $this;
    }

    public function setGiftSettings(GiftSettings $value): static
    {
        $this->giftSettings = $value;

        return $this;
    }

    public function setGroupInCommonCount(int $value): static
    {
        $this->groupInCommonCount = $value;

        return $this;
    }

    public function setHasPostedToProfileStories(bool $value): static
    {
        $this->hasPostedToProfileStories = $value;

        return $this;
    }

    public function setHasPrivateCalls(bool $value): static
    {
        $this->hasPrivateCalls = $value;

        return $this;
    }

    public function setHasPrivateForwards(bool $value): static
    {
        $this->hasPrivateForwards = $value;

        return $this;
    }

    public function setHasRestrictedVoiceAndVideoNoteMessages(bool $value): static
    {
        $this->hasRestrictedVoiceAndVideoNoteMessages = $value;

        return $this;
    }

    public function setHasSponsoredMessagesEnabled(bool $value): static
    {
        $this->hasSponsoredMessagesEnabled = $value;

        return $this;
    }

    public function setIncomingPaidMessageStarCount(int $value): static
    {
        $this->incomingPaidMessageStarCount = $value;

        return $this;
    }

    public function setMainProfileTab(?ProfileTab $value): static
    {
        $this->mainProfileTab = $value;

        return $this;
    }

    public function setNeedPhoneNumberPrivacyException(bool $value): static
    {
        $this->needPhoneNumberPrivacyException = $value;

        return $this;
    }

    public function setNote(?FormattedText $value): static
    {
        $this->note = $value;

        return $this;
    }

    public function setOutgoingPaidMessageStarCount(int $value): static
    {
        $this->outgoingPaidMessageStarCount = $value;

        return $this;
    }

    public function setPendingRating(?UserRating $value): static
    {
        $this->pendingRating = $value;

        return $this;
    }

    public function setPendingRatingDate(int $value): static
    {
        $this->pendingRatingDate = $value;

        return $this;
    }

    public function setPersonalChatId(int $value): static
    {
        $this->personalChatId = $value;

        return $this;
    }

    public function setPersonalPhoto(?ChatPhoto $value): static
    {
        $this->personalPhoto = $value;

        return $this;
    }

    public function setPhoto(?ChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setPublicPhoto(?ChatPhoto $value): static
    {
        $this->publicPhoto = $value;

        return $this;
    }

    public function setRating(?UserRating $value): static
    {
        $this->rating = $value;

        return $this;
    }

    public function setSetChatBackground(bool $value): static
    {
        $this->setChatBackground = $value;

        return $this;
    }

    public function setSupportsVideoCalls(bool $value): static
    {
        $this->supportsVideoCalls = $value;

        return $this;
    }

    public function setUsesUnofficialApp(bool $value): static
    {
        $this->usesUnofficialApp = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                        => static::TYPE_NAME,
            'bio'                                          => (null !== $this->bio ? $this->bio->jsonSerialize() : null),
            'birthdate'                                    => (null !== $this->birthdate ? $this->birthdate->jsonSerialize() : null),
            'block_list'                                   => (null !== $this->blockList ? $this->blockList->jsonSerialize() : null),
            'bot_info'                                     => (null !== $this->botInfo ? $this->botInfo->jsonSerialize() : null),
            'bot_verification'                             => (null !== $this->botVerification ? $this->botVerification->jsonSerialize() : null),
            'business_info'                                => (null !== $this->businessInfo ? $this->businessInfo->jsonSerialize() : null),
            'can_be_called'                                => $this->canBeCalled,
            'first_profile_audio'                          => (null !== $this->firstProfileAudio ? $this->firstProfileAudio->jsonSerialize() : null),
            'gift_count'                                   => $this->giftCount,
            'gift_settings'                                => $this->giftSettings->jsonSerialize(),
            'group_in_common_count'                        => $this->groupInCommonCount,
            'has_posted_to_profile_stories'                => $this->hasPostedToProfileStories,
            'has_private_calls'                            => $this->hasPrivateCalls,
            'has_private_forwards'                         => $this->hasPrivateForwards,
            'has_restricted_voice_and_video_note_messages' => $this->hasRestrictedVoiceAndVideoNoteMessages,
            'has_sponsored_messages_enabled'               => $this->hasSponsoredMessagesEnabled,
            'incoming_paid_message_star_count'             => $this->incomingPaidMessageStarCount,
            'main_profile_tab'                             => (null !== $this->mainProfileTab ? $this->mainProfileTab->jsonSerialize() : null),
            'need_phone_number_privacy_exception'          => $this->needPhoneNumberPrivacyException,
            'note'                                         => (null !== $this->note ? $this->note->jsonSerialize() : null),
            'outgoing_paid_message_star_count'             => $this->outgoingPaidMessageStarCount,
            'pending_rating'                               => (null !== $this->pendingRating ? $this->pendingRating->jsonSerialize() : null),
            'pending_rating_date'                          => $this->pendingRatingDate,
            'personal_chat_id'                             => $this->personalChatId,
            'personal_photo'                               => (null !== $this->personalPhoto ? $this->personalPhoto->jsonSerialize() : null),
            'photo'                                        => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'public_photo'                                 => (null !== $this->publicPhoto ? $this->publicPhoto->jsonSerialize() : null),
            'rating'                                       => (null !== $this->rating ? $this->rating->jsonSerialize() : null),
            'set_chat_background'                          => $this->setChatBackground,
            'supports_video_calls'                         => $this->supportsVideoCalls,
            'uses_unofficial_app'                          => $this->usesUnofficialApp,
        ];
    }
}

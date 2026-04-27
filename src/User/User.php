<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Active\ActiveStoryState;
use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\Profile\ProfilePhoto;
use Totaldev\TgSchema\Restriction\RestrictionInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftColors;
use Totaldev\TgSchema\Usernames\Usernames;
use Totaldev\TgSchema\Verification\VerificationStatus;

/**
 * Represents a user.
 */
class User extends TdObject
{
    public const string TYPE_NAME = 'user';

    public function __construct(
        /**
         * Identifier of the accent color for name, and backgrounds of profile photo, reply header, and link preview.
         */
        protected int                 $accentColorId,
        /**
         * State of active stories of the user; may be null if the user has no active stories.
         */
        protected ?ActiveStoryState   $activeStoryState,
        /**
         * True, if the user added the current bot to attachment menu; only available to bots.
         */
        protected bool                $addedToAttachmentMenu,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
         */
        protected int                 $backgroundCustomEmojiId,
        /**
         * Emoji status to be shown instead of the default Telegram Premium badge; may be null.
         */
        protected ?EmojiStatus        $emojiStatus,
        /**
         * First name of the user.
         */
        protected string              $firstName,
        /**
         * If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method.
         */
        protected bool                $haveAccess,
        /**
         * User identifier.
         */
        protected int                 $id,
        /**
         * The user is a close friend of the current user; implies that the user is a contact.
         */
        protected bool                $isCloseFriend,
        /**
         * The user is a contact of the current user.
         */
        protected bool                $isContact,
        /**
         * The user is a contact of the current user and the current user is a contact of the user.
         */
        protected bool                $isMutualContact,
        /**
         * True, if the user is a Telegram Premium user.
         */
        protected bool                $isPremium,
        /**
         * True, if the user is Telegram support account.
         */
        protected bool                $isSupport,
        /**
         * IETF language tag of the user's language; only available to bots.
         */
        protected string              $languageCode,
        /**
         * Last name of the user.
         */
        protected string              $lastName,
        /**
         * Number of Telegram Stars that must be paid by general user for each sent message to the user. If positive and userFullInfo is unknown, use canSendMessageToUser to check whether the current user must pay.
         */
        protected int                 $paidMessageStarCount,
        /**
         * Phone number of the user.
         */
        protected string              $phoneNumber,
        /**
         * Identifier of the accent color for the user's profile; -1 if none.
         */
        protected int                 $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the background of the user's profile; 0 if none.
         */
        protected int                 $profileBackgroundCustomEmojiId,
        /**
         * Profile photo of the user; may be null.
         */
        protected ?ProfilePhoto       $profilePhoto,
        /**
         * Information about restrictions that must be applied to the corresponding private chat; may be null if none.
         */
        protected ?RestrictionInfo    $restrictionInfo,
        /**
         * True, if the user may restrict new chats with non-contacts. Use canSendMessageToUser to check whether the current user can message the user or try to create a chat with them.
         */
        protected bool                $restrictsNewChats,
        /**
         * Current online status of the user.
         */
        protected UserStatus          $status,
        /**
         * Type of the user.
         */
        protected UserType            $type,
        /**
         * Color scheme based on an upgraded gift to be used for the user instead of accent_color_id and background_custom_emoji_id; may be null if none.
         */
        protected ?UpgradedGiftColors $upgradedGiftColors,
        /**
         * Usernames of the user; may be null.
         */
        protected ?Usernames          $usernames,
        /**
         * Information about verification status of the user; may be null if none.
         */
        protected ?VerificationStatus $verificationStatus,
    ) {}

    public static function fromArray(array $array): User
    {
        return new static(
            accentColorId                 : $array['accent_color_id'],
            activeStoryState              : (isset($array['active_story_state']) ? TdSchemaRegistry::fromArray($array['active_story_state']) : null),
            addedToAttachmentMenu         : $array['added_to_attachment_menu'],
            backgroundCustomEmojiId       : $array['background_custom_emoji_id'],
            emojiStatus                   : (isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null),
            firstName                     : $array['first_name'],
            haveAccess                    : $array['have_access'],
            id                            : $array['id'],
            isCloseFriend                 : $array['is_close_friend'],
            isContact                     : $array['is_contact'],
            isMutualContact               : $array['is_mutual_contact'],
            isPremium                     : $array['is_premium'],
            isSupport                     : $array['is_support'],
            languageCode                  : $array['language_code'],
            lastName                      : $array['last_name'],
            paidMessageStarCount          : $array['paid_message_star_count'],
            phoneNumber                   : $array['phone_number'],
            profileAccentColorId          : $array['profile_accent_color_id'],
            profileBackgroundCustomEmojiId: $array['profile_background_custom_emoji_id'],
            profilePhoto                  : (isset($array['profile_photo']) ? TdSchemaRegistry::fromArray($array['profile_photo']) : null),
            restrictionInfo               : (isset($array['restriction_info']) ? TdSchemaRegistry::fromArray($array['restriction_info']) : null),
            restrictsNewChats             : $array['restricts_new_chats'],
            status                        : TdSchemaRegistry::fromArray($array['status']),
            type                          : TdSchemaRegistry::fromArray($array['type']),
            upgradedGiftColors            : (isset($array['upgraded_gift_colors']) ? TdSchemaRegistry::fromArray($array['upgraded_gift_colors']) : null),
            usernames                     : (isset($array['usernames']) ? TdSchemaRegistry::fromArray($array['usernames']) : null),
            verificationStatus            : (isset($array['verification_status']) ? TdSchemaRegistry::fromArray($array['verification_status']) : null),
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getActiveStoryState(): ?ActiveStoryState
    {
        return $this->activeStoryState;
    }

    public function getAddedToAttachmentMenu(): bool
    {
        return $this->addedToAttachmentMenu;
    }

    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    public function getEmojiStatus(): ?EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getHaveAccess(): bool
    {
        return $this->haveAccess;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsCloseFriend(): bool
    {
        return $this->isCloseFriend;
    }

    public function getIsContact(): bool
    {
        return $this->isContact;
    }

    public function getIsMutualContact(): bool
    {
        return $this->isMutualContact;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getIsSupport(): bool
    {
        return $this->isSupport;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getProfileAccentColorId(): int
    {
        return $this->profileAccentColorId;
    }

    public function getProfileBackgroundCustomEmojiId(): int
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    public function getProfilePhoto(): ?ProfilePhoto
    {
        return $this->profilePhoto;
    }

    public function getRestrictionInfo(): ?RestrictionInfo
    {
        return $this->restrictionInfo;
    }

    public function getRestrictsNewChats(): bool
    {
        return $this->restrictsNewChats;
    }

    public function getStatus(): UserStatus
    {
        return $this->status;
    }

    public function getType(): UserType
    {
        return $this->type;
    }

    public function getUpgradedGiftColors(): ?UpgradedGiftColors
    {
        return $this->upgradedGiftColors;
    }

    public function getUsernames(): ?Usernames
    {
        return $this->usernames;
    }

    public function getVerificationStatus(): ?VerificationStatus
    {
        return $this->verificationStatus;
    }

    public function setAccentColorId(int $value): static
    {
        $this->accentColorId = $value;

        return $this;
    }

    public function setActiveStoryState(?ActiveStoryState $value): static
    {
        $this->activeStoryState = $value;

        return $this;
    }

    public function setAddedToAttachmentMenu(bool $value): static
    {
        $this->addedToAttachmentMenu = $value;

        return $this;
    }

    public function setBackgroundCustomEmojiId(int $value): static
    {
        $this->backgroundCustomEmojiId = $value;

        return $this;
    }

    public function setEmojiStatus(?EmojiStatus $value): static
    {
        $this->emojiStatus = $value;

        return $this;
    }

    public function setFirstName(string $value): static
    {
        $this->firstName = $value;

        return $this;
    }

    public function setHaveAccess(bool $value): static
    {
        $this->haveAccess = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsCloseFriend(bool $value): static
    {
        $this->isCloseFriend = $value;

        return $this;
    }

    public function setIsContact(bool $value): static
    {
        $this->isContact = $value;

        return $this;
    }

    public function setIsMutualContact(bool $value): static
    {
        $this->isMutualContact = $value;

        return $this;
    }

    public function setIsPremium(bool $value): static
    {
        $this->isPremium = $value;

        return $this;
    }

    public function setIsSupport(bool $value): static
    {
        $this->isSupport = $value;

        return $this;
    }

    public function setLanguageCode(string $value): static
    {
        $this->languageCode = $value;

        return $this;
    }

    public function setLastName(string $value): static
    {
        $this->lastName = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setPhoneNumber(string $value): static
    {
        $this->phoneNumber = $value;

        return $this;
    }

    public function setProfileAccentColorId(int $value): static
    {
        $this->profileAccentColorId = $value;

        return $this;
    }

    public function setProfileBackgroundCustomEmojiId(int $value): static
    {
        $this->profileBackgroundCustomEmojiId = $value;

        return $this;
    }

    public function setProfilePhoto(?ProfilePhoto $value): static
    {
        $this->profilePhoto = $value;

        return $this;
    }

    public function setRestrictionInfo(?RestrictionInfo $value): static
    {
        $this->restrictionInfo = $value;

        return $this;
    }

    public function setRestrictsNewChats(bool $value): static
    {
        $this->restrictsNewChats = $value;

        return $this;
    }

    public function setStatus(UserStatus $value): static
    {
        $this->status = $value;

        return $this;
    }

    public function setType(UserType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function setUpgradedGiftColors(?UpgradedGiftColors $value): static
    {
        $this->upgradedGiftColors = $value;

        return $this;
    }

    public function setUsernames(?Usernames $value): static
    {
        $this->usernames = $value;

        return $this;
    }

    public function setVerificationStatus(?VerificationStatus $value): static
    {
        $this->verificationStatus = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'accent_color_id'                    => $this->accentColorId,
            'active_story_state'                 => (null !== $this->activeStoryState ? $this->activeStoryState->jsonSerialize() : null),
            'added_to_attachment_menu'           => $this->addedToAttachmentMenu,
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'emoji_status'                       => (null !== $this->emojiStatus ? $this->emojiStatus->jsonSerialize() : null),
            'first_name'                         => $this->firstName,
            'have_access'                        => $this->haveAccess,
            'id'                                 => $this->id,
            'is_close_friend'                    => $this->isCloseFriend,
            'is_contact'                         => $this->isContact,
            'is_mutual_contact'                  => $this->isMutualContact,
            'is_premium'                         => $this->isPremium,
            'is_support'                         => $this->isSupport,
            'language_code'                      => $this->languageCode,
            'last_name'                          => $this->lastName,
            'paid_message_star_count'            => $this->paidMessageStarCount,
            'phone_number'                       => $this->phoneNumber,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
            'profile_photo'                      => (null !== $this->profilePhoto ? $this->profilePhoto->jsonSerialize() : null),
            'restriction_info'                   => (null !== $this->restrictionInfo ? $this->restrictionInfo->jsonSerialize() : null),
            'restricts_new_chats'                => $this->restrictsNewChats,
            'status'                             => $this->status->jsonSerialize(),
            'type'                               => $this->type->jsonSerialize(),
            'upgraded_gift_colors'               => (null !== $this->upgradedGiftColors ? $this->upgradedGiftColors->jsonSerialize() : null),
            'usernames'                          => (null !== $this->usernames ? $this->usernames->jsonSerialize() : null),
            'verification_status'                => (null !== $this->verificationStatus ? $this->verificationStatus->jsonSerialize() : null),
        ];
    }
}

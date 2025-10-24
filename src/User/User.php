<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

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
         * User identifier.
         */
        protected int                 $id,
        /**
         * First name of the user.
         */
        protected string              $firstName,
        /**
         * Last name of the user.
         */
        protected string              $lastName,
        /**
         * Usernames of the user; may be null.
         */
        protected ?Usernames          $usernames,
        /**
         * Phone number of the user.
         */
        protected string              $phoneNumber,
        /**
         * Current online status of the user.
         */
        protected UserStatus          $status,
        /**
         * Profile photo of the user; may be null.
         */
        protected ?ProfilePhoto       $profilePhoto,
        /**
         * Identifier of the accent color for name, and backgrounds of profile photo, reply header, and link preview.
         */
        protected int                 $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none.
         */
        protected int                 $backgroundCustomEmojiId,
        /**
         * Color scheme based on an upgraded gift to be used for the user instead of accent_color_id and background_custom_emoji_id; may be null if none.
         */
        protected ?UpgradedGiftColors $upgradedGiftColors,
        /**
         * Identifier of the accent color for the user's profile; -1 if none.
         */
        protected int                 $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the background of the user's profile; 0 if none.
         */
        protected int                 $profileBackgroundCustomEmojiId,
        /**
         * Emoji status to be shown instead of the default Telegram Premium badge; may be null.
         */
        protected ?EmojiStatus        $emojiStatus,
        /**
         * The user is a contact of the current user.
         */
        protected bool                $isContact,
        /**
         * The user is a contact of the current user and the current user is a contact of the user.
         */
        protected bool                $isMutualContact,
        /**
         * The user is a close friend of the current user; implies that the user is a contact.
         */
        protected bool                $isCloseFriend,
        /**
         * Information about verification status of the user; may be null if none.
         */
        protected ?VerificationStatus $verificationStatus,
        /**
         * True, if the user is a Telegram Premium user.
         */
        protected bool                $isPremium,
        /**
         * True, if the user is Telegram support account.
         */
        protected bool                $isSupport,
        /**
         * Information about restrictions that must be applied to the corresponding private chat; may be null if none.
         */
        protected ?RestrictionInfo    $restrictionInfo,
        /**
         * True, if the user has non-expired stories available to the current user.
         */
        protected bool                $hasActiveStories,
        /**
         * True, if the user has unread non-expired stories available to the current user.
         */
        protected bool                $hasUnreadActiveStories,
        /**
         * True, if the user may restrict new chats with non-contacts. Use canSendMessageToUser to check whether the current user can message the user or try to create a chat with them.
         */
        protected bool                $restrictsNewChats,
        /**
         * Number of Telegram Stars that must be paid by general user for each sent message to the user. If positive and userFullInfo is unknown, use canSendMessageToUser to check whether the current user must pay.
         */
        protected int                 $paidMessageStarCount,
        /**
         * If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method.
         */
        protected bool                $haveAccess,
        /**
         * Type of the user.
         */
        protected UserType            $type,
        /**
         * IETF language tag of the user's language; only available to bots.
         */
        protected string              $languageCode,
        /**
         * True, if the user added the current bot to attachment menu; only available to bots.
         */
        protected bool                $addedToAttachmentMenu,
    ) {}

    public static function fromArray(array $array): User
    {
        return new static(
            $array['id'],
            $array['first_name'],
            $array['last_name'],
            isset($array['usernames']) ? TdSchemaRegistry::fromArray($array['usernames']) : null,
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['status']),
            isset($array['profile_photo']) ? TdSchemaRegistry::fromArray($array['profile_photo']) : null,
            $array['accent_color_id'],
            $array['background_custom_emoji_id'],
            isset($array['upgraded_gift_colors']) ? TdSchemaRegistry::fromArray($array['upgraded_gift_colors']) : null,
            $array['profile_accent_color_id'],
            $array['profile_background_custom_emoji_id'],
            isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null,
            $array['is_contact'],
            $array['is_mutual_contact'],
            $array['is_close_friend'],
            isset($array['verification_status']) ? TdSchemaRegistry::fromArray($array['verification_status']) : null,
            $array['is_premium'],
            $array['is_support'],
            isset($array['restriction_info']) ? TdSchemaRegistry::fromArray($array['restriction_info']) : null,
            $array['has_active_stories'],
            $array['has_unread_active_stories'],
            $array['restricts_new_chats'],
            $array['paid_message_star_count'],
            $array['have_access'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['language_code'],
            $array['added_to_attachment_menu'],
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
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

    public function getHasActiveStories(): bool
    {
        return $this->hasActiveStories;
    }

    public function getHasUnreadActiveStories(): bool
    {
        return $this->hasUnreadActiveStories;
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

    public function setHasActiveStories(bool $value): static
    {
        $this->hasActiveStories = $value;

        return $this;
    }

    public function setHasUnreadActiveStories(bool $value): static
    {
        $this->hasUnreadActiveStories = $value;

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
            'id'                                 => $this->id,
            'first_name'                         => $this->firstName,
            'last_name'                          => $this->lastName,
            'usernames'                          => $this->usernames ?? null,
            'phone_number'                       => $this->phoneNumber,
            'status'                             => $this->status->typeSerialize(),
            'profile_photo'                      => $this->profilePhoto ?? null,
            'accent_color_id'                    => $this->accentColorId,
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'upgraded_gift_colors'               => $this->upgradedGiftColors ?? null,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
            'emoji_status'                       => $this->emojiStatus ?? null,
            'is_contact'                         => $this->isContact,
            'is_mutual_contact'                  => $this->isMutualContact,
            'is_close_friend'                    => $this->isCloseFriend,
            'verification_status'                => $this->verificationStatus ?? null,
            'is_premium'                         => $this->isPremium,
            'is_support'                         => $this->isSupport,
            'restriction_info'                   => $this->restrictionInfo ?? null,
            'has_active_stories'                 => $this->hasActiveStories,
            'has_unread_active_stories'          => $this->hasUnreadActiveStories,
            'restricts_new_chats'                => $this->restrictsNewChats,
            'paid_message_star_count'            => $this->paidMessageStarCount,
            'have_access'                        => $this->haveAccess,
            'type'                               => $this->type->typeSerialize(),
            'language_code'                      => $this->languageCode,
            'added_to_attachment_menu'           => $this->addedToAttachmentMenu,
        ];
    }
}

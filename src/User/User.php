<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\Profile\ProfilePhoto;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Usernames\Usernames;

/**
 * Represents a user.
 */
class User extends TdObject
{
    public const TYPE_NAME = 'user';

    public function __construct(
        /**
         * User identifier.
         */
        protected int           $id,
        /**
         * First name of the user.
         */
        protected string        $firstName,
        /**
         * Last name of the user.
         */
        protected string        $lastName,
        /**
         * Usernames of the user; may be null.
         */
        protected ?Usernames    $usernames,
        /**
         * Phone number of the user.
         */
        protected string        $phoneNumber,
        /**
         * Current online status of the user.
         */
        protected UserStatus    $status,
        /**
         * Profile photo of the user; may be null.
         */
        protected ?ProfilePhoto $profilePhoto,
        /**
         * Identifier of the accent color for name, and backgrounds of profile photo, reply header, and link preview. For Telegram Premium users only.
         */
        protected int           $accentColorId,
        /**
         * Identifier of a custom emoji to be shown on the reply header and link preview background; 0 if none. For Telegram Premium users only.
         */
        protected int           $backgroundCustomEmojiId,
        /**
         * Identifier of the accent color for the user's profile; -1 if none. For Telegram Premium users only.
         */
        protected int           $profileAccentColorId,
        /**
         * Identifier of a custom emoji to be shown on the background of the user's profile; 0 if none. For Telegram Premium users only.
         */
        protected int           $profileBackgroundCustomEmojiId,
        /**
         * Emoji status to be shown instead of the default Telegram Premium badge; may be null. For Telegram Premium users only.
         */
        protected ?EmojiStatus  $emojiStatus,
        /**
         * The user is a contact of the current user.
         */
        protected bool          $isContact,
        /**
         * The user is a contact of the current user and the current user is a contact of the user.
         */
        protected bool          $isMutualContact,
        /**
         * The user is a close friend of the current user; implies that the user is a contact.
         */
        protected bool          $isCloseFriend,
        /**
         * True, if the user is verified.
         */
        protected bool          $isVerified,
        /**
         * True, if the user is a Telegram Premium user.
         */
        protected bool          $isPremium,
        /**
         * True, if the user is Telegram support account.
         */
        protected bool          $isSupport,
        /**
         * If non-empty, it contains a human-readable description of the reason why access to this user must be restricted.
         */
        protected string        $restrictionReason,
        /**
         * True, if many users reported this user as a scam.
         */
        protected bool          $isScam,
        /**
         * True, if many users reported this user as a fake account.
         */
        protected bool          $isFake,
        /**
         * True, if the user has non-expired stories available to the current user.
         */
        protected bool          $hasActiveStories,
        /**
         * True, if the user has unread non-expired stories available to the current user.
         */
        protected bool          $hasUnreadActiveStories,
        /**
         * True, if the user may restrict new chats with non-contacts. Use canSendMessageToUser to check whether the current user can message the user or try to create a chat with them.
         */
        protected bool          $restrictsNewChats,
        /**
         * If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method.
         */
        protected bool          $haveAccess,
        /**
         * Type of the user.
         */
        protected UserType      $type,
        /**
         * IETF language tag of the user's language; only available to bots.
         */
        protected string        $languageCode,
        /**
         * True, if the user added the current bot to attachment menu; only available to bots.
         */
        protected bool          $addedToAttachmentMenu,
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
            $array['profile_accent_color_id'],
            $array['profile_background_custom_emoji_id'],
            isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null,
            $array['is_contact'],
            $array['is_mutual_contact'],
            $array['is_close_friend'],
            $array['is_verified'],
            $array['is_premium'],
            $array['is_support'],
            $array['restriction_reason'],
            $array['is_scam'],
            $array['is_fake'],
            $array['has_active_stories'],
            $array['has_unread_active_stories'],
            $array['restricts_new_chats'],
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

    public function getIsFake(): bool
    {
        return $this->isFake;
    }

    public function getIsMutualContact(): bool
    {
        return $this->isMutualContact;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getIsSupport(): bool
    {
        return $this->isSupport;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getLastName(): string
    {
        return $this->lastName;
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

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
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

    public function getUsernames(): ?Usernames
    {
        return $this->usernames;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                              => static::TYPE_NAME,
            'id'                                 => $this->id,
            'first_name'                         => $this->firstName,
            'last_name'                          => $this->lastName,
            'usernames'                          => (isset($this->usernames) ? $this->usernames : null),
            'phone_number'                       => $this->phoneNumber,
            'status'                             => $this->status->typeSerialize(),
            'profile_photo'                      => (isset($this->profilePhoto) ? $this->profilePhoto : null),
            'accent_color_id'                    => $this->accentColorId,
            'background_custom_emoji_id'         => $this->backgroundCustomEmojiId,
            'profile_accent_color_id'            => $this->profileAccentColorId,
            'profile_background_custom_emoji_id' => $this->profileBackgroundCustomEmojiId,
            'emoji_status'                       => (isset($this->emojiStatus) ? $this->emojiStatus : null),
            'is_contact'                         => $this->isContact,
            'is_mutual_contact'                  => $this->isMutualContact,
            'is_close_friend'                    => $this->isCloseFriend,
            'is_verified'                        => $this->isVerified,
            'is_premium'                         => $this->isPremium,
            'is_support'                         => $this->isSupport,
            'restriction_reason'                 => $this->restrictionReason,
            'is_scam'                            => $this->isScam,
            'is_fake'                            => $this->isFake,
            'has_active_stories'                 => $this->hasActiveStories,
            'has_unread_active_stories'          => $this->hasUnreadActiveStories,
            'restricts_new_chats'                => $this->restrictsNewChats,
            'have_access'                        => $this->haveAccess,
            'type'                               => $this->type->typeSerialize(),
            'language_code'                      => $this->languageCode,
            'added_to_attachment_menu'           => $this->addedToAttachmentMenu,
        ];
    }
}

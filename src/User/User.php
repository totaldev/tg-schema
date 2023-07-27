<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\Emoji\EmojiStatus;
use Totaldev\TgSchema\Profile\ProfilePhoto;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Usernames\Usernames;

/**
 * Represents a user
 */
class User extends TdObject
{
    public const TYPE_NAME = 'user';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * First name of the user
     *
     * @var string
     */
    protected string $firstName;

    /**
     * Last name of the user
     *
     * @var string
     */
    protected string $lastName;

    /**
     * Usernames of the user; may be null
     *
     * @var Usernames|null
     */
    protected ?Usernames $usernames;

    /**
     * Phone number of the user
     *
     * @var string
     */
    protected string $phoneNumber;

    /**
     * Current online status of the user
     *
     * @var UserStatus
     */
    protected UserStatus $status;

    /**
     * Profile photo of the user; may be null
     *
     * @var ProfilePhoto|null
     */
    protected ?ProfilePhoto $profilePhoto;

    /**
     * Emoji status to be shown instead of the default Telegram Premium badge; may be null. For Telegram Premium users only
     *
     * @var EmojiStatus|null
     */
    protected ?EmojiStatus $emojiStatus;

    /**
     * The user is a contact of the current user
     *
     * @var bool
     */
    protected bool $isContact;

    /**
     * The user is a contact of the current user and the current user is a contact of the user
     *
     * @var bool
     */
    protected bool $isMutualContact;

    /**
     * The user is a close friend of the current user; implies that the user is a contact
     *
     * @var bool
     */
    protected bool $isCloseFriend;

    /**
     * True, if the user is verified
     *
     * @var bool
     */
    protected bool $isVerified;

    /**
     * True, if the user is a Telegram Premium user
     *
     * @var bool
     */
    protected bool $isPremium;

    /**
     * True, if the user is Telegram support account
     *
     * @var bool
     */
    protected bool $isSupport;

    /**
     * If non-empty, it contains a human-readable description of the reason why access to this user must be restricted
     *
     * @var string
     */
    protected string $restrictionReason;

    /**
     * True, if many users reported this user as a scam
     *
     * @var bool
     */
    protected bool $isScam;

    /**
     * True, if many users reported this user as a fake account
     *
     * @var bool
     */
    protected bool $isFake;

    /**
     * True, if the user has non-expired stories available to the current user
     *
     * @var bool
     */
    protected bool $hasActiveStories;

    /**
     * True, if the user has unread non-expired stories available to the current user
     *
     * @var bool
     */
    protected bool $hasUnreadActiveStories;

    /**
     * If false, the user is inaccessible, and the only information known about the user is inside this class. Identifier of the user can't be passed to any method
     *
     * @var bool
     */
    protected bool $haveAccess;

    /**
     * Type of the user
     *
     * @var UserType
     */
    protected UserType $type;

    /**
     * IETF language tag of the user's language; only available to bots
     *
     * @var string
     */
    protected string $languageCode;

    /**
     * True, if the user added the current bot to attachment menu; only available to bots
     *
     * @var bool
     */
    protected bool $addedToAttachmentMenu;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        ?Usernames $usernames,
        string $phoneNumber,
        UserStatus $status,
        ?ProfilePhoto $profilePhoto,
        ?EmojiStatus $emojiStatus,
        bool $isContact,
        bool $isMutualContact,
        bool $isCloseFriend,
        bool $isVerified,
        bool $isPremium,
        bool $isSupport,
        string $restrictionReason,
        bool $isScam,
        bool $isFake,
        bool $hasActiveStories,
        bool $hasUnreadActiveStories,
        bool $haveAccess,
        UserType $type,
        string $languageCode,
        bool $addedToAttachmentMenu,
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->usernames = $usernames;
        $this->phoneNumber = $phoneNumber;
        $this->status = $status;
        $this->profilePhoto = $profilePhoto;
        $this->emojiStatus = $emojiStatus;
        $this->isContact = $isContact;
        $this->isMutualContact = $isMutualContact;
        $this->isCloseFriend = $isCloseFriend;
        $this->isVerified = $isVerified;
        $this->isPremium = $isPremium;
        $this->isSupport = $isSupport;
        $this->restrictionReason = $restrictionReason;
        $this->isScam = $isScam;
        $this->isFake = $isFake;
        $this->hasActiveStories = $hasActiveStories;
        $this->hasUnreadActiveStories = $hasUnreadActiveStories;
        $this->haveAccess = $haveAccess;
        $this->type = $type;
        $this->languageCode = $languageCode;
        $this->addedToAttachmentMenu = $addedToAttachmentMenu;
    }

    public static function fromArray(array $array): User
    {
        return new static(
            $array['id'],
            $array['first_name'],
            $array['last_name'],
            (isset($array['usernames']) ? TdSchemaRegistry::fromArray($array['usernames']) : null),
            $array['phone_number'],
            TdSchemaRegistry::fromArray($array['status']),
            (isset($array['profile_photo']) ? TdSchemaRegistry::fromArray($array['profile_photo']) : null),
            (isset($array['emoji_status']) ? TdSchemaRegistry::fromArray($array['emoji_status']) : null),
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
            $array['have_access'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['language_code'],
            $array['added_to_attachment_menu'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'usernames' => (isset($this->usernames) ? $this->usernames : null),
            'phone_number' => $this->phoneNumber,
            'status' => $this->status->typeSerialize(),
            'profile_photo' => (isset($this->profilePhoto) ? $this->profilePhoto : null),
            'emoji_status' => (isset($this->emojiStatus) ? $this->emojiStatus : null),
            'is_contact' => $this->isContact,
            'is_mutual_contact' => $this->isMutualContact,
            'is_close_friend' => $this->isCloseFriend,
            'is_verified' => $this->isVerified,
            'is_premium' => $this->isPremium,
            'is_support' => $this->isSupport,
            'restriction_reason' => $this->restrictionReason,
            'is_scam' => $this->isScam,
            'is_fake' => $this->isFake,
            'has_active_stories' => $this->hasActiveStories,
            'has_unread_active_stories' => $this->hasUnreadActiveStories,
            'have_access' => $this->haveAccess,
            'type' => $this->type->typeSerialize(),
            'language_code' => $this->languageCode,
            'added_to_attachment_menu' => $this->addedToAttachmentMenu,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getUsernames(): ?Usernames
    {
        return $this->usernames;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getStatus(): UserStatus
    {
        return $this->status;
    }

    public function getProfilePhoto(): ?ProfilePhoto
    {
        return $this->profilePhoto;
    }

    public function getEmojiStatus(): ?EmojiStatus
    {
        return $this->emojiStatus;
    }

    public function getIsContact(): bool
    {
        return $this->isContact;
    }

    public function getIsMutualContact(): bool
    {
        return $this->isMutualContact;
    }

    public function getIsCloseFriend(): bool
    {
        return $this->isCloseFriend;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getIsSupport(): bool
    {
        return $this->isSupport;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getIsFake(): bool
    {
        return $this->isFake;
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

    public function getType(): UserType
    {
        return $this->type;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getAddedToAttachmentMenu(): bool
    {
        return $this->addedToAttachmentMenu;
    }
}

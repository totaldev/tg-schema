<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;

/**
 * Contains full information about a user
 */
class UserFullInfo extends TdObject
{
    public const TYPE_NAME = 'userFullInfo';

    /**
     * User profile photo set by the current user for the contact; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null, then it is the same photo as in user.profile_photo and chat.photo. This photo isn't returned in the list of user photos
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $personalPhoto;

    /**
     * User profile photo; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null and personal_photo is null, then it is the same photo as in user.profile_photo and chat.photo
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * User profile photo visible if the main photo is hidden by privacy settings; may be null. If null and user.profile_photo is null, then the photo is empty; otherwise, it is unknown. If non-null and both photo and personal_photo are null, then it is the same photo as in user.profile_photo and chat.photo. This photo isn't returned in the list of user photos
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $publicPhoto;

    /**
     * True, if the user is blocked by the current user
     *
     * @var bool
     */
    protected bool $isBlocked;

    /**
     * True, if the user can be called
     *
     * @var bool
     */
    protected bool $canBeCalled;

    /**
     * True, if a video call can be created with the user
     *
     * @var bool
     */
    protected bool $supportsVideoCalls;

    /**
     * True, if the user can't be called due to their privacy settings
     *
     * @var bool
     */
    protected bool $hasPrivateCalls;

    /**
     * True, if the user can't be linked in forwarded messages due to their privacy settings
     *
     * @var bool
     */
    protected bool $hasPrivateForwards;

    /**
     * True, if voice and video notes can't be sent or forwarded to the user
     *
     * @var bool
     */
    protected bool $hasRestrictedVoiceAndVideoNoteMessages;

    /**
     * True, if the user has pinned stories
     *
     * @var bool
     */
    protected bool $hasPinnedStories;

    /**
     * True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used
     *
     * @var bool
     */
    protected bool $needPhoneNumberPrivacyException;

    /**
     * A short user bio; may be null for bots
     *
     * @var FormattedText|null
     */
    protected ?FormattedText $bio;

    /**
     * The list of available options for gifting Telegram Premium to the user
     *
     * @var PremiumPaymentOption[]
     */
    protected array $premiumGiftOptions;

    /**
     * Number of group chats where both the other user and the current user are a member; 0 for the current user
     *
     * @var int
     */
    protected int $groupInCommonCount;

    /**
     * For bots, information about the bot; may be null
     *
     * @var BotInfo|null
     */
    protected ?BotInfo $botInfo;

    public function __construct(
        ?ChatPhoto $personalPhoto,
        ?ChatPhoto $photo,
        ?ChatPhoto $publicPhoto,
        bool $isBlocked,
        bool $canBeCalled,
        bool $supportsVideoCalls,
        bool $hasPrivateCalls,
        bool $hasPrivateForwards,
        bool $hasRestrictedVoiceAndVideoNoteMessages,
        bool $hasPinnedStories,
        bool $needPhoneNumberPrivacyException,
        ?FormattedText $bio,
        array $premiumGiftOptions,
        int $groupInCommonCount,
        ?BotInfo $botInfo,
    ) {
        $this->personalPhoto = $personalPhoto;
        $this->photo = $photo;
        $this->publicPhoto = $publicPhoto;
        $this->isBlocked = $isBlocked;
        $this->canBeCalled = $canBeCalled;
        $this->supportsVideoCalls = $supportsVideoCalls;
        $this->hasPrivateCalls = $hasPrivateCalls;
        $this->hasPrivateForwards = $hasPrivateForwards;
        $this->hasRestrictedVoiceAndVideoNoteMessages = $hasRestrictedVoiceAndVideoNoteMessages;
        $this->hasPinnedStories = $hasPinnedStories;
        $this->needPhoneNumberPrivacyException = $needPhoneNumberPrivacyException;
        $this->bio = $bio;
        $this->premiumGiftOptions = $premiumGiftOptions;
        $this->groupInCommonCount = $groupInCommonCount;
        $this->botInfo = $botInfo;
    }

    public static function fromArray(array $array): UserFullInfo
    {
        return new static(
            (isset($array['personal_photo']) ? TdSchemaRegistry::fromArray($array['personal_photo']) : null),
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            (isset($array['public_photo']) ? TdSchemaRegistry::fromArray($array['public_photo']) : null),
            $array['is_blocked'],
            $array['can_be_called'],
            $array['supports_video_calls'],
            $array['has_private_calls'],
            $array['has_private_forwards'],
            $array['has_restricted_voice_and_video_note_messages'],
            $array['has_pinned_stories'],
            $array['need_phone_number_privacy_exception'],
            (isset($array['bio']) ? TdSchemaRegistry::fromArray($array['bio']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['premiumGiftOptions']),
            $array['group_in_common_count'],
            (isset($array['bot_info']) ? TdSchemaRegistry::fromArray($array['bot_info']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'personal_photo' => (isset($this->personalPhoto) ? $this->personalPhoto : null),
            'photo' => (isset($this->photo) ? $this->photo : null),
            'public_photo' => (isset($this->publicPhoto) ? $this->publicPhoto : null),
            'is_blocked' => $this->isBlocked,
            'can_be_called' => $this->canBeCalled,
            'supports_video_calls' => $this->supportsVideoCalls,
            'has_private_calls' => $this->hasPrivateCalls,
            'has_private_forwards' => $this->hasPrivateForwards,
            'has_restricted_voice_and_video_note_messages' => $this->hasRestrictedVoiceAndVideoNoteMessages,
            'has_pinned_stories' => $this->hasPinnedStories,
            'need_phone_number_privacy_exception' => $this->needPhoneNumberPrivacyException,
            'bio' => (isset($this->bio) ? $this->bio : null),
            array_map(fn($x) => $x->typeSerialize(), $this->premiumGiftOptions),
            'group_in_common_count' => $this->groupInCommonCount,
            'bot_info' => (isset($this->botInfo) ? $this->botInfo : null),
        ];
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

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function getCanBeCalled(): bool
    {
        return $this->canBeCalled;
    }

    public function getSupportsVideoCalls(): bool
    {
        return $this->supportsVideoCalls;
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

    public function getHasPinnedStories(): bool
    {
        return $this->hasPinnedStories;
    }

    public function getNeedPhoneNumberPrivacyException(): bool
    {
        return $this->needPhoneNumberPrivacyException;
    }

    public function getBio(): ?FormattedText
    {
        return $this->bio;
    }

    public function getPremiumGiftOptions(): array
    {
        return $this->premiumGiftOptions;
    }

    public function getGroupInCommonCount(): int
    {
        return $this->groupInCommonCount;
    }

    public function getBotInfo(): ?BotInfo
    {
        return $this->botInfo;
    }
}

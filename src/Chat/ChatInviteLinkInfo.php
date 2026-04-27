<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Invite\InviteLinkChatType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Verification\VerificationStatus;

/**
 * Contains information about a chat invite link.
 */
class ChatInviteLinkInfo extends TdObject
{
    public const string TYPE_NAME = 'chatInviteLinkInfo';

    public function __construct(
        /**
         * Identifier of the accent color for chat title and background of chat photo.
         */
        protected int                             $accentColorId,
        /**
         * If non-zero, the amount of time for which read access to the chat will remain available, in seconds.
         */
        protected int                             $accessibleFor,
        /**
         * Chat identifier of the invite link; 0 if the user has no access to the chat before joining.
         */
        protected int                             $chatId,
        /**
         * True, if the link only creates join request.
         */
        protected bool                            $createsJoinRequest,
        /**
         * Chat description.
         */
        protected string                          $description,
        /**
         * True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup.
         */
        protected bool                            $isPublic,
        /**
         * Number of members in the chat.
         */
        protected int                             $memberCount,
        /**
         * User identifiers of some chat members that may be known to the current user.
         *
         * @var int[]
         */
        protected array                           $memberUserIds,
        /**
         * Chat photo; may be null.
         */
        protected ?ChatPhotoInfo                  $photo,
        /**
         * Information about subscription plan that must be paid by the user to use the link; may be null if the link doesn't require subscription.
         */
        protected ?ChatInviteLinkSubscriptionInfo $subscriptionInfo,
        /**
         * Title of the chat.
         */
        protected string                          $title,
        /**
         * Type of the chat.
         */
        protected InviteLinkChatType              $type,
        /**
         * Information about verification status of the chat; may be null if none.
         */
        protected ?VerificationStatus             $verificationStatus,
    ) {}

    public static function fromArray(array $array): ChatInviteLinkInfo
    {
        return new static(
            accentColorId     : $array['accent_color_id'],
            accessibleFor     : $array['accessible_for'],
            chatId            : $array['chat_id'],
            createsJoinRequest: $array['creates_join_request'],
            description       : $array['description'],
            isPublic          : $array['is_public'],
            memberCount       : $array['member_count'],
            memberUserIds     : $array['member_user_ids'],
            photo             : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            subscriptionInfo  : (isset($array['subscription_info']) ? TdSchemaRegistry::fromArray($array['subscription_info']) : null),
            title             : $array['title'],
            type              : TdSchemaRegistry::fromArray($array['type']),
            verificationStatus: (isset($array['verification_status']) ? TdSchemaRegistry::fromArray($array['verification_status']) : null),
        );
    }

    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    public function getAccessibleFor(): int
    {
        return $this->accessibleFor;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getSubscriptionInfo(): ?ChatInviteLinkSubscriptionInfo
    {
        return $this->subscriptionInfo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): InviteLinkChatType
    {
        return $this->type;
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

    public function setAccessibleFor(int $value): static
    {
        $this->accessibleFor = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCreatesJoinRequest(bool $value): static
    {
        $this->createsJoinRequest = $value;

        return $this;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setIsPublic(bool $value): static
    {
        $this->isPublic = $value;

        return $this;
    }

    public function setMemberCount(int $value): static
    {
        $this->memberCount = $value;

        return $this;
    }

    public function setMemberUserIds(array $value): static
    {
        $this->memberUserIds = $value;

        return $this;
    }

    public function setPhoto(?ChatPhotoInfo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setSubscriptionInfo(?ChatInviteLinkSubscriptionInfo $value): static
    {
        $this->subscriptionInfo = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setType(InviteLinkChatType $value): static
    {
        $this->type = $value;

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
            '@type'                => static::TYPE_NAME,
            'accent_color_id'      => $this->accentColorId,
            'accessible_for'       => $this->accessibleFor,
            'chat_id'              => $this->chatId,
            'creates_join_request' => $this->createsJoinRequest,
            'description'          => $this->description,
            'is_public'            => $this->isPublic,
            'member_count'         => $this->memberCount,
            'member_user_ids'      => $this->memberUserIds,
            'photo'                => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'subscription_info'    => (null !== $this->subscriptionInfo ? $this->subscriptionInfo->jsonSerialize() : null),
            'title'                => $this->title,
            'type'                 => $this->type->jsonSerialize(),
            'verification_status'  => (null !== $this->verificationStatus ? $this->verificationStatus->jsonSerialize() : null),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Invite\InviteLinkChatType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a chat invite link.
 */
class ChatInviteLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkInfo';

    public function __construct(
        /**
         * Chat identifier of the invite link; 0 if the user has no access to the chat before joining.
         */
        protected int                             $chatId,
        /**
         * If non-zero, the amount of time for which read access to the chat will remain available, in seconds.
         */
        protected int                             $accessibleFor,
        /**
         * Type of the chat.
         */
        protected InviteLinkChatType              $type,
        /**
         * Title of the chat.
         */
        protected string                          $title,
        /**
         * Chat photo; may be null.
         */
        protected ?ChatPhotoInfo                  $photo,
        /**
         * Identifier of the accent color for chat title and background of chat photo.
         */
        protected int                             $accentColorId,
        /**
         * Chat description.
         */
        protected string                          $description,
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
         * Information about subscription plan that must be paid by the user to use the link; may be null if the link doesn't require subscription.
         */
        protected ?ChatInviteLinkSubscriptionInfo $subscriptionInfo,
        /**
         * True, if the link only creates join request.
         */
        protected bool                            $createsJoinRequest,
        /**
         * True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup.
         */
        protected bool                            $isPublic,
        /**
         * True, if the chat is verified.
         */
        protected bool                            $isVerified,
        /**
         * True, if many users reported this chat as a scam.
         */
        protected bool                            $isScam,
        /**
         * True, if many users reported this chat as a fake account.
         */
        protected bool                            $isFake,
    ) {}

    public static function fromArray(array $array): ChatInviteLinkInfo
    {
        return new static(
            $array['chat_id'],
            $array['accessible_for'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['accent_color_id'],
            $array['description'],
            $array['member_count'],
            $array['member_user_ids'],
            isset($array['subscription_info']) ? TdSchemaRegistry::fromArray($array['subscription_info']) : null,
            $array['creates_join_request'],
            $array['is_public'],
            $array['is_verified'],
            $array['is_scam'],
            $array['is_fake'],
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

    public function getIsFake(): bool
    {
        return $this->isFake;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'accessible_for'       => $this->accessibleFor,
            'type'                 => $this->type->typeSerialize(),
            'title'                => $this->title,
            'photo'                => (isset($this->photo) ? $this->photo : null),
            'accent_color_id'      => $this->accentColorId,
            'description'          => $this->description,
            'member_count'         => $this->memberCount,
            'member_user_ids'      => $this->memberUserIds,
            'subscription_info'    => (isset($this->subscriptionInfo) ? $this->subscriptionInfo : null),
            'creates_join_request' => $this->createsJoinRequest,
            'is_public'            => $this->isPublic,
            'is_verified'          => $this->isVerified,
            'is_scam'              => $this->isScam,
            'is_fake'              => $this->isFake,
        ];
    }
}

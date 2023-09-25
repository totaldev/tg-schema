<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Invite\InviteLinkChatType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a chat invite link
 */
class ChatInviteLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkInfo';

    /**
     * If non-zero, the amount of time for which read access to the chat will remain available, in seconds
     *
     * @var int
     */
    protected int $accessibleFor;

    /**
     * Chat identifier of the invite link; 0 if the user has no access to the chat before joining
     *
     * @var int
     */
    protected int $chatId;

    /**
     * True, if the link only creates join request
     *
     * @var bool
     */
    protected bool $createsJoinRequest;

    /**
     * Chat description
     *
     * @var string
     */
    protected string $description;

    /**
     * True, if many users reported this chat as a fake account
     *
     * @var bool
     */
    protected bool $isFake;

    /**
     * True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup
     *
     * @var bool
     */
    protected bool $isPublic;

    /**
     * True, if many users reported this chat as a scam
     *
     * @var bool
     */
    protected bool $isScam;

    /**
     * True, if the chat is verified
     *
     * @var bool
     */
    protected bool $isVerified;

    /**
     * Number of members in the chat
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * User identifiers of some chat members that may be known to the current user
     *
     * @var int[]
     */
    protected array $memberUserIds;

    /**
     * Chat photo; may be null
     *
     * @var ChatPhotoInfo|null
     */
    protected ?ChatPhotoInfo $photo;

    /**
     * Title of the chat
     *
     * @var string
     */
    protected string $title;

    /**
     * Type of the chat
     *
     * @var InviteLinkChatType
     */
    protected InviteLinkChatType $type;

    public function __construct(
        int                $chatId,
        int                $accessibleFor,
        InviteLinkChatType $type,
        string             $title,
        ?ChatPhotoInfo     $photo,
        string             $description,
        int                $memberCount,
        array              $memberUserIds,
        bool               $createsJoinRequest,
        bool               $isPublic,
        bool               $isVerified,
        bool               $isScam,
        bool               $isFake,
    )
    {
        $this->chatId = $chatId;
        $this->accessibleFor = $accessibleFor;
        $this->type = $type;
        $this->title = $title;
        $this->photo = $photo;
        $this->description = $description;
        $this->memberCount = $memberCount;
        $this->memberUserIds = $memberUserIds;
        $this->createsJoinRequest = $createsJoinRequest;
        $this->isPublic = $isPublic;
        $this->isVerified = $isVerified;
        $this->isScam = $isScam;
        $this->isFake = $isFake;
    }

    public static function fromArray(array $array): ChatInviteLinkInfo
    {
        return new static(
            $array['chat_id'],
            $array['accessible_for'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['description'],
            $array['member_count'],
            $array['member_user_ids'],
            $array['creates_join_request'],
            $array['is_public'],
            $array['is_verified'],
            $array['is_scam'],
            $array['is_fake'],
        );
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
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'accessible_for' => $this->accessibleFor,
            'type' => $this->type->typeSerialize(),
            'title' => $this->title,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'description' => $this->description,
            'member_count' => $this->memberCount,
            'member_user_ids' => $this->memberUserIds,
            'creates_join_request' => $this->createsJoinRequest,
            'is_public' => $this->isPublic,
            'is_verified' => $this->isVerified,
            'is_scam' => $this->isScam,
            'is_fake' => $this->isFake,
        ];
    }
}

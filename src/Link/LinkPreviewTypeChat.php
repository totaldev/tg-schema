<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Chat\ChatPhoto;
use Totaldev\TgSchema\Invite\InviteLinkChatType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a chat.
 */
class LinkPreviewTypeChat extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeChat';

    public function __construct(
        /**
         * True, if the link only creates join request.
         */
        protected bool               $createsJoinRequest,
        /**
         * Photo of the chat; may be null.
         */
        protected ?ChatPhoto         $photo,
        /**
         * Type of the chat.
         */
        protected InviteLinkChatType $type,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeChat
    {
        return new static(
            createsJoinRequest: $array['creates_join_request'],
            photo             : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            type              : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getType(): InviteLinkChatType
    {
        return $this->type;
    }

    public function setCreatesJoinRequest(bool $value): static
    {
        $this->createsJoinRequest = $value;

        return $this;
    }

    public function setPhoto(?ChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setType(InviteLinkChatType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'creates_join_request' => $this->createsJoinRequest,
            'photo'                => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'type'                 => $this->type->jsonSerialize(),
        ];
    }
}

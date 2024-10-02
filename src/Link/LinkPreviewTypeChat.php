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
    public const TYPE_NAME = 'linkPreviewTypeChat';

    public function __construct(
        /**
         * Type of the chat.
         */
        protected InviteLinkChatType $type,
        /**
         * Photo of the chat; may be null.
         */
        protected ?ChatPhoto         $photo,
        /**
         * True, if the link only creates join request.
         */
        protected bool               $createsJoinRequest,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeChat
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
            $array['creates_join_request'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'type'                 => $this->type->typeSerialize(),
            'photo'                => (isset($this->photo) ? $this->photo : null),
            'creates_join_request' => $this->createsJoinRequest,
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatType;
use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming inline query; for bots only.
 */
class UpdateNewInlineQuery extends Update
{
    public const string TYPE_NAME = 'updateNewInlineQuery';

    public function __construct(
        /**
         * The type of the chat from which the query originated; may be null if unknown.
         */
        protected ?ChatType $chatType,
        /**
         * Unique query identifier.
         */
        protected int       $id,
        /**
         * Offset of the first entry to return.
         */
        protected string    $offset,
        /**
         * Text of the query.
         */
        protected string    $query,
        /**
         * Identifier of the user who sent the query.
         */
        protected int       $senderUserId,
        /**
         * User location; may be null.
         */
        protected ?Location $userLocation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewInlineQuery
    {
        return new static(
            chatType    : (isset($array['chat_type']) ? TdSchemaRegistry::fromArray($array['chat_type']) : null),
            id          : $array['id'],
            offset      : $array['offset'],
            query       : $array['query'],
            senderUserId: $array['sender_user_id'],
            userLocation: (isset($array['user_location']) ? TdSchemaRegistry::fromArray($array['user_location']) : null),
        );
    }

    public function getChatType(): ?ChatType
    {
        return $this->chatType;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getUserLocation(): ?Location
    {
        return $this->userLocation;
    }

    public function setChatType(?ChatType $value): static
    {
        $this->chatType = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function setSenderUserId(int $value): static
    {
        $this->senderUserId = $value;

        return $this;
    }

    public function setUserLocation(?Location $value): static
    {
        $this->userLocation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_type'      => (null !== $this->chatType ? $this->chatType->jsonSerialize() : null),
            'id'             => $this->id,
            'offset'         => $this->offset,
            'query'          => $this->query,
            'sender_user_id' => $this->senderUserId,
            'user_location'  => (null !== $this->userLocation ? $this->userLocation->jsonSerialize() : null),
        ];
    }
}

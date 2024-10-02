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
    public const TYPE_NAME = 'updateNewInlineQuery';

    public function __construct(
        /**
         * Unique query identifier.
         */
        protected int       $id,
        /**
         * Identifier of the user who sent the query.
         */
        protected int       $senderUserId,
        /**
         * User location; may be null.
         */
        protected ?Location $userLocation,
        /**
         * The type of the chat from which the query originated; may be null if unknown.
         */
        protected ?ChatType $chatType,
        /**
         * Text of the query.
         */
        protected string    $query,
        /**
         * Offset of the first entry to return.
         */
        protected string    $offset,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewInlineQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            isset($array['user_location']) ? TdSchemaRegistry::fromArray($array['user_location']) : null,
            isset($array['chat_type']) ? TdSchemaRegistry::fromArray($array['chat_type']) : null,
            $array['query'],
            $array['offset'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'sender_user_id' => $this->senderUserId,
            'user_location'  => (isset($this->userLocation) ? $this->userLocation : null),
            'chat_type'      => (isset($this->chatType) ? $this->chatType : null),
            'query'          => $this->query,
            'offset'         => $this->offset,
        ];
    }
}

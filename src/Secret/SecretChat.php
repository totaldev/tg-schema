<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Secret;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a secret chat.
 */
class SecretChat extends TdObject
{
    public const string TYPE_NAME = 'secretChat';

    public function __construct(
        /**
         * Secret chat identifier.
         */
        protected int             $id,
        /**
         * True, if the chat was created by the current user; false otherwise.
         */
        protected bool            $isOutbound,
        /**
         * Hash of the currently used key for comparison with the hash of the chat partner's key. This is a string of 36 little-endian bytes, which must be split into groups of 2 bits, each denoting a pixel of one of 4 colors FFFFFF, D5E6F3, 2D5775, and 2F99C9. The pixels must be used to make a 12x12 square image filled from left to right, top to bottom. Alternatively, the first 32 bytes of the hash can be converted to the hexadecimal format and printed as 32 2-digit hex numbers.
         */
        protected string          $keyHash,
        /**
         * Secret chat layer; determines features supported by the chat partner's application. Nested text entities and underline and strikethrough entities are supported if the layer >= 101, files bigger than 2000MB are supported if the layer >= 143, spoiler and custom emoji text entities are supported if the layer >= 144.
         */
        protected int             $layer,
        /**
         * State of the secret chat.
         */
        protected SecretChatState $state,
        /**
         * Identifier of the chat partner.
         */
        protected int             $userId,
    ) {}

    public static function fromArray(array $array): SecretChat
    {
        return new static(
            id        : $array['id'],
            isOutbound: $array['is_outbound'],
            keyHash   : $array['key_hash'],
            layer     : $array['layer'],
            state     : TdSchemaRegistry::fromArray($array['state']),
            userId    : $array['user_id'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsOutbound(): bool
    {
        return $this->isOutbound;
    }

    public function getKeyHash(): string
    {
        return $this->keyHash;
    }

    public function getLayer(): int
    {
        return $this->layer;
    }

    public function getState(): SecretChatState
    {
        return $this->state;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsOutbound(bool $value): static
    {
        $this->isOutbound = $value;

        return $this;
    }

    public function setKeyHash(string $value): static
    {
        $this->keyHash = $value;

        return $this;
    }

    public function setLayer(int $value): static
    {
        $this->layer = $value;

        return $this;
    }

    public function setState(SecretChatState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'is_outbound' => $this->isOutbound,
            'key_hash'    => $this->keyHash,
            'layer'       => $this->layer,
            'state'       => $this->state->jsonSerialize(),
            'user_id'     => $this->userId,
        ];
    }
}

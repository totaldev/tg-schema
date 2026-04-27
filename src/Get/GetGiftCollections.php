<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns collections of gifts owned by the given user or chat.
 */
class GetGiftCollections extends TdFunction
{
    public const string TYPE_NAME = 'getGiftCollections';

    public function __construct(
        /**
         * Identifier of the user or the channel chat that received the gifts.
         */
        protected MessageSender $ownerId
    ) {}

    public static function fromArray(array $array): GetGiftCollections
    {
        return new static(
            ownerId: TdSchemaRegistry::fromArray($array['owner_id']),
        );
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'owner_id' => $this->ownerId->jsonSerialize(),
        ];
    }
}

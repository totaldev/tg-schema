<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a URL for a Telegram Ad platform account that can be used to set up advertisements for the chat paid in the owned Telegram Stars.
 */
class GetStarAdAccountUrl extends TdFunction
{
    public const TYPE_NAME = 'getStarAdAccountUrl';

    public function __construct(
        /**
         * Identifier of the owner of the Telegram Stars; can be identifier of an owned bot, or identifier of an owned channel chat.
         */
        protected MessageSender $ownerId
    ) {}

    public static function fromArray(array $array): GetStarAdAccountUrl
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
        );
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'owner_id' => $this->ownerId->typeSerialize(),
        ];
    }
}

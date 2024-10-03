<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Public\PublicChatType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of public chats of the specified type, owned by the user.
 */
class GetCreatedPublicChats extends TdFunction
{
    public const TYPE_NAME = 'getCreatedPublicChats';

    public function __construct(
        /**
         * Type of the public chats to return.
         */
        protected PublicChatType $type
    ) {}

    public static function fromArray(array $array): GetCreatedPublicChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getType(): PublicChatType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}

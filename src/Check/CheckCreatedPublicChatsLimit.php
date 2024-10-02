<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\Public\PublicChatType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether the maximum number of owned public chats has been reached. Returns corresponding error if the limit was reached. The limit can be increased
 * with Telegram Premium.
 */
class CheckCreatedPublicChatsLimit extends TdFunction
{
    public const TYPE_NAME = 'checkCreatedPublicChatsLimit';

    public function __construct(
        /**
         * Type of the public chats, for which to check the limit.
         */
        protected PublicChatType $type
    ) {}

    public static function fromArray(array $array): CheckCreatedPublicChatsLimit
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

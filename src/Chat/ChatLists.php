<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat lists.
 */
class ChatLists extends TdObject
{
    public const TYPE_NAME = 'chatLists';

    public function __construct(
        /**
         * List of chat lists.
         *
         * @var ChatList[]
         */
        protected array $chatLists
    ) {}

    public static function fromArray(array $array): ChatLists
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_lists']),
        );
    }

    public function getChatLists(): array
    {
        return $this->chatLists;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->chatLists),
        ];
    }
}

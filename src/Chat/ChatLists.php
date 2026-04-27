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
    public const string TYPE_NAME = 'chatLists';

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
            chatLists: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_lists']),
        );
    }

    public function getChatLists(): array
    {
        return $this->chatLists;
    }

    public function setChatLists(array $value): static
    {
        $this->chatLists = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_lists' => array_map(static fn($x) => $x->jsonSerialize(), $this->chatLists),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Top\TopChatCategory;

/**
 * Returns a list of frequently used chats.
 */
class GetTopChats extends TdFunction
{
    public const string TYPE_NAME = 'getTopChats';

    public function __construct(
        /**
         * Category of chats to be returned.
         */
        protected TopChatCategory $category,
        /**
         * The maximum number of chats to be returned; up to 30.
         */
        protected int             $limit,
    ) {}

    public static function fromArray(array $array): GetTopChats
    {
        return new static(
            category: TdSchemaRegistry::fromArray($array['category']),
            limit   : $array['limit'],
        );
    }

    public function getCategory(): TopChatCategory
    {
        return $this->category;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setCategory(TopChatCategory $value): static
    {
        $this->category = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'category' => $this->category->jsonSerialize(),
            'limit'    => $this->limit,
        ];
    }
}

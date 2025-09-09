<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages in basic group and supergroup chats.
 */
class SearchMessagesChatTypeFilterGroup extends SearchMessagesChatTypeFilter
{
    public const TYPE_NAME = 'searchMessagesChatTypeFilterGroup';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesChatTypeFilterGroup
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

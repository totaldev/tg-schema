<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages in private chats.
 */
class SearchMessagesChatTypeFilterPrivate extends SearchMessagesChatTypeFilter
{
    public const TYPE_NAME = 'searchMessagesChatTypeFilterPrivate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesChatTypeFilterPrivate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

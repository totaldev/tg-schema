<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns only messages with unread reactions for the current user. When using this filter the results can't be additionally filtered by a query, a message
 * thread or by the sending user
 */
class SearchMessagesFilterUnreadReaction extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterUnreadReaction';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterUnreadReaction
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

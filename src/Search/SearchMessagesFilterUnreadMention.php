<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns only messages with unread mentions of the current user, or messages that are replies to their messages. When using this filter the results can't be
 * additionally filtered by a query, a message thread or by the sending user
 */
class SearchMessagesFilterUnreadMention extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterUnreadMention';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterUnreadMention
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

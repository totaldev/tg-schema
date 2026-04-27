<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages with unread mentions of the current user, or messages that are replies to their messages. When using this filter the results can't be
 * additionally filtered by a query or by the sending user.
 */
class SearchMessagesFilterUnreadMention extends SearchMessagesFilter
{
    public const string TYPE_NAME = 'searchMessagesFilterUnreadMention';

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

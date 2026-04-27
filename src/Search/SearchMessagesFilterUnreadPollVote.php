<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages with unread poll votes for the current user. When using this filter the results can't be additionally filtered by a query or by the
 * sending user.
 */
class SearchMessagesFilterUnreadPollVote extends SearchMessagesFilter
{
    public const string TYPE_NAME = 'searchMessagesFilterUnreadPollVote';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterUnreadPollVote
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

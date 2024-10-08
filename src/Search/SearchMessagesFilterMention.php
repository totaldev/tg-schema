<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages with mentions of the current user, or messages that are replies to their messages.
 */
class SearchMessagesFilterMention extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterMention';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterMention
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

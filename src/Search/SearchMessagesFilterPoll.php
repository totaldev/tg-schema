<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only poll messages.
 */
class SearchMessagesFilterPoll extends SearchMessagesFilter
{
    public const string TYPE_NAME = 'searchMessagesFilterPoll';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterPoll
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

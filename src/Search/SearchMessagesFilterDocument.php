<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only document messages.
 */
class SearchMessagesFilterDocument extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterDocument';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterDocument
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

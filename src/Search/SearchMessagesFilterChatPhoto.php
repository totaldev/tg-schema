<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

/**
 * Returns only messages containing chat photos.
 */
class SearchMessagesFilterChatPhoto extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterChatPhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterChatPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

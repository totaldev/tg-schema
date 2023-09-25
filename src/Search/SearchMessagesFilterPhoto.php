<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns only photo messages
 */
class SearchMessagesFilterPhoto extends SearchMessagesFilter
{
    public const TYPE_NAME = 'searchMessagesFilterPhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SearchMessagesFilterPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

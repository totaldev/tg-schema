<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

/**
 * The message is from search results, including file downloads, local file list, outgoing document messages, calendar
 */
class MessageSourceSearch extends MessageSource
{
    public const TYPE_NAME = 'messageSourceSearch';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSourceSearch
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}

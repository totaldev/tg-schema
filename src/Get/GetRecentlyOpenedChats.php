<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns recently opened chats. This is an offline method. Returns chats in the order of last opening.
 */
class GetRecentlyOpenedChats extends TdFunction
{
    public const TYPE_NAME = 'getRecentlyOpenedChats';

    public function __construct(
        /**
         * The maximum number of chats to be returned.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): GetRecentlyOpenedChats
    {
        return new static(
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
        ];
    }
}

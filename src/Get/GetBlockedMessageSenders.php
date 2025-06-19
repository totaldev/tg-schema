<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns users and chats that were blocked by the current user.
 */
class GetBlockedMessageSenders extends TdFunction
{
    public const TYPE_NAME = 'getBlockedMessageSenders';

    public function __construct(
        /**
         * Block list from which to return users.
         */
        protected BlockList $blockList,
        /**
         * Number of users and chats to skip in the result; must be non-negative.
         */
        protected int       $offset,
        /**
         * The maximum number of users and chats to return; up to 100.
         */
        protected int       $limit
    ) {}

    public static function fromArray(array $array): GetBlockedMessageSenders
    {
        return new static(
            TdSchemaRegistry::fromArray($array['block_list']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getBlockList(): BlockList
    {
        return $this->blockList;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'block_list' => $this->blockList->typeSerialize(),
            'offset'     => $this->offset,
            'limit'      => $this->limit,
        ];
    }
}

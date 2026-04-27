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
    public const string TYPE_NAME = 'getBlockedMessageSenders';

    public function __construct(
        /**
         * Block list from which to return users.
         */
        protected BlockList $blockList,
        /**
         * The maximum number of users and chats to return; up to 100.
         */
        protected int       $limit,
        /**
         * Number of users and chats to skip in the result; must be non-negative.
         */
        protected int       $offset,
    ) {}

    public static function fromArray(array $array): GetBlockedMessageSenders
    {
        return new static(
            blockList: TdSchemaRegistry::fromArray($array['block_list']),
            limit    : $array['limit'],
            offset   : $array['offset'],
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

    public function setBlockList(BlockList $value): static
    {
        $this->blockList = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'block_list' => $this->blockList->jsonSerialize(),
            'limit'      => $this->limit,
            'offset'     => $this->offset,
        ];
    }
}

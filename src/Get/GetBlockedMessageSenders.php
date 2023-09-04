<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns users and chats that were blocked by the current user
 */
class GetBlockedMessageSenders extends TdFunction
{
    public const TYPE_NAME = 'getBlockedMessageSenders';

    /**
     * Block list from which to return users
     *
     * @var BlockList
     */
    protected BlockList $blockList;

    /**
     * Number of users and chats to skip in the result; must be non-negative
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of users and chats to return; up to 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(BlockList $blockList, int $offset, int $limit)
    {
        $this->blockList = $blockList;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetBlockedMessageSenders
    {
        return new static(
            TdSchemaRegistry::fromArray($array['block_list']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'block_list' => $this->blockList->typeSerialize(),
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getBlockList(): BlockList
    {
        return $this->blockList;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}

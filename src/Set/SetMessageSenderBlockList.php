<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the block list of a message sender. Currently, only users and supergroup chats can be blocked
 */
class SetMessageSenderBlockList extends TdFunction
{
    public const TYPE_NAME = 'setMessageSenderBlockList';

    /**
     * New block list for the message sender; pass null to unblock the message sender
     *
     * @var BlockList
     */
    protected BlockList $blockList;

    /**
     * Identifier of a message sender to block/unblock
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    public function __construct(MessageSender $senderId, BlockList $blockList)
    {
        $this->senderId = $senderId;
        $this->blockList = $blockList;
    }

    public static function fromArray(array $array): SetMessageSenderBlockList
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['block_list']),
        );
    }

    public function getBlockList(): BlockList
    {
        return $this->blockList;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_id' => $this->senderId->typeSerialize(),
            'block_list' => $this->blockList->typeSerialize(),
        ];
    }
}

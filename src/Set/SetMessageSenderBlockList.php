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
 * Changes the block list of a message sender. Currently, only users and supergroup chats can be blocked.
 */
class SetMessageSenderBlockList extends TdFunction
{
    public const string TYPE_NAME = 'setMessageSenderBlockList';

    public function __construct(
        /**
         * Identifier of a message sender to block/unblock.
         */
        protected MessageSender $senderId,
        /**
         * New block list for the message sender; pass null to unblock the message sender.
         */
        protected ?BlockList    $blockList = null,
    ) {}

    public static function fromArray(array $array): SetMessageSenderBlockList
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender_id']),
            isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null,
        );
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function setBlockList(?BlockList $value): static
    {
        $this->blockList = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'sender_id'  => $this->senderId->typeSerialize(),
            'block_list' => $this->blockList ?? null,
        ];
    }
}

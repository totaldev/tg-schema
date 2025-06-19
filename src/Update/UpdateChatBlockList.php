<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat was blocked or unblocked.
 */
class UpdateChatBlockList extends Update
{
    public const TYPE_NAME = 'updateChatBlockList';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int        $chatId,
        /**
         * Block list to which the chat is added; may be null if none.
         */
        protected ?BlockList $blockList
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatBlockList
    {
        return new static(
            $array['chat_id'],
            isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null,
        );
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'block_list' => (isset($this->blockList) ? $this->blockList : null),
        ];
    }
}

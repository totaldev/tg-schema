<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat was blocked or unblocked
 */
class UpdateChatBlockList extends Update
{
    public const TYPE_NAME = 'updateChatBlockList';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Block list to which the chat is added; may be null if none
     *
     * @var BlockList|null
     */
    protected ?BlockList $blockList;

    public function __construct(int $chatId, ?BlockList $blockList)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->blockList = $blockList;
    }

    public static function fromArray(array $array): UpdateChatBlockList
    {
        return new static(
            $array['chat_id'],
            (isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'block_list' => (isset($this->blockList) ? $this->blockList : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }
}

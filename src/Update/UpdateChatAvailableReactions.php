<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatAvailableReactions;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat available reactions were changed
 */
class UpdateChatAvailableReactions extends Update
{
    public const TYPE_NAME = 'updateChatAvailableReactions';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new reactions, available in the chat
     *
     * @var ChatAvailableReactions
     */
    protected ChatAvailableReactions $availableReactions;

    public function __construct(int $chatId, ChatAvailableReactions $availableReactions)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->availableReactions = $availableReactions;
    }

    public static function fromArray(array $array): UpdateChatAvailableReactions
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['available_reactions']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'available_reactions' => $this->availableReactions->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getAvailableReactions(): ChatAvailableReactions
    {
        return $this->availableReactions;
    }
}

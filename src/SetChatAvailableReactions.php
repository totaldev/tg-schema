<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Changes reactions, available in a chat. Available for basic groups, supergroups, and channels. Requires can_change_info administrator right
 */
class SetChatAvailableReactions extends TdFunction
{
    public const TYPE_NAME = 'setChatAvailableReactions';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Reactions available in the chat. All emoji reactions must be active
     *
     * @var ChatAvailableReactions
     */
    protected ChatAvailableReactions $availableReactions;

    public function __construct(int $chatId, ChatAvailableReactions $availableReactions)
    {
        $this->chatId = $chatId;
        $this->availableReactions = $availableReactions;
    }

    public static function fromArray(array $array): SetChatAvailableReactions
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

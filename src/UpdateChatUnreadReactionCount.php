<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The chat unread_reaction_count has changed
 */
class UpdateChatUnreadReactionCount extends Update
{
    public const TYPE_NAME = 'updateChatUnreadReactionCount';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The number of messages with unread reactions left in the chat
     *
     * @var int
     */
    protected int $unreadReactionCount;

    public function __construct(int $chatId, int $unreadReactionCount)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->unreadReactionCount = $unreadReactionCount;
    }

    public static function fromArray(array $array): UpdateChatUnreadReactionCount
    {
        return new static(
            $array['chat_id'],
            $array['unread_reaction_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'unread_reaction_count' => $this->unreadReactionCount,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }
}

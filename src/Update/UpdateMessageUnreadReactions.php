<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Unread\UnreadReaction;

/**
 * The list of unread reactions added to a message was changed
 */
class UpdateMessageUnreadReactions extends Update
{
    public const TYPE_NAME = 'updateMessageUnreadReactions';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new number of messages with unread reactions left in the chat
     *
     * @var int
     */
    protected int $unreadReactionCount;

    /**
     * The new list of unread reactions
     *
     * @var UnreadReaction[]
     */
    protected array $unreadReactions;

    public function __construct(int $chatId, int $messageId, array $unreadReactions, int $unreadReactionCount)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->unreadReactions = $unreadReactions;
        $this->unreadReactionCount = $unreadReactionCount;
    }

    public static function fromArray(array $array): UpdateMessageUnreadReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['unread_reactions']),
            $array['unread_reaction_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    public function getUnreadReactions(): array
    {
        return $this->unreadReactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            array_map(fn($x) => $x->typeSerialize(), $this->unreadReactions),
            'unread_reaction_count' => $this->unreadReactionCount,
        ];
    }
}

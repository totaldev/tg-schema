<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Unread\UnreadReaction;

/**
 * The list of unread reactions added to a message was changed.
 */
class UpdateMessageUnreadReactions extends Update
{
    public const string TYPE_NAME = 'updateMessageUnreadReactions';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * Message identifier.
         */
        protected int   $messageId,
        /**
         * The new number of messages with unread reactions left in the chat.
         */
        protected int   $unreadReactionCount,
        /**
         * The new list of unread reactions.
         *
         * @var UnreadReaction[]
         */
        protected array $unreadReactions,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageUnreadReactions
    {
        return new static(
            chatId             : $array['chat_id'],
            messageId          : $array['message_id'],
            unreadReactionCount: $array['unread_reaction_count'],
            unreadReactions    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['unread_reactions']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setUnreadReactionCount(int $value): static
    {
        $this->unreadReactionCount = $value;

        return $this;
    }

    public function setUnreadReactions(array $value): static
    {
        $this->unreadReactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'message_id'            => $this->messageId,
            'unread_reaction_count' => $this->unreadReactionCount,
            'unread_reactions'      => array_map(static fn($x) => $x->jsonSerialize(), $this->unreadReactions),
        ];
    }
}

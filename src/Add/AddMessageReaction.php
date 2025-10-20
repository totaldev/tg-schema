<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a reaction or a tag to a message. Use getMessageAvailableReactions to receive the list of available reactions for the message.
 */
class AddMessageReaction extends TdFunction
{
    public const TYPE_NAME = 'addMessageReaction';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int          $chatId,
        /**
         * Identifier of the message.
         */
        protected int          $messageId,
        /**
         * Type of the reaction to add. Use addPendingPaidMessageReaction instead to add the paid reaction.
         */
        protected ReactionType $reactionType,
        /**
         * Pass true if the reaction is added with a big animation.
         */
        protected bool         $isBig,
        /**
         * Pass true if the reaction needs to be added to recent reactions; tags are never added to the list of recent reactions.
         */
        protected bool         $updateRecentReactions,
    ) {}

    public static function fromArray(array $array): AddMessageReaction
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['is_big'],
            $array['update_recent_reactions'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsBig(): bool
    {
        return $this->isBig;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }

    public function getUpdateRecentReactions(): bool
    {
        return $this->updateRecentReactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'message_id'              => $this->messageId,
            'reaction_type'           => $this->reactionType->typeSerialize(),
            'is_big'                  => $this->isBig,
            'update_recent_reactions' => $this->updateRecentReactions,
        ];
    }
}

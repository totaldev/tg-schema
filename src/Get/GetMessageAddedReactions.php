<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns reactions added for a message, along with their sender.
 */
class GetMessageAddedReactions extends TdFunction
{
    public const TYPE_NAME = 'getMessageAddedReactions';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int          $chatId,
        /**
         * Identifier of the message. Use message.interaction_info.reactions.can_get_added_reactions to check whether added reactions can be received for the message.
         */
        protected int          $messageId,
        /**
         * Type of the reactions to return; pass null to return all added reactions; reactionTypePaid isn't supported.
         */
        protected ReactionType $reactionType,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string       $offset,
        /**
         * The maximum number of reactions to be returned; must be positive and can't be greater than 100.
         */
        protected int          $limit,
    ) {}

    public static function fromArray(array $array): GetMessageAddedReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reaction_type']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getReactionType(): ReactionType
    {
        return $this->reactionType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'message_id'    => $this->messageId,
            'reaction_type' => $this->reactionType->typeSerialize(),
            'offset'        => $this->offset,
            'limit'         => $this->limit,
        ];
    }
}

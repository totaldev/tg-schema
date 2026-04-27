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
    public const string TYPE_NAME = 'getMessageAddedReactions';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int           $chatId,
        /**
         * The maximum number of reactions to be returned; must be positive and can't be greater than 100.
         */
        protected int           $limit,
        /**
         * Identifier of the message. Use message.interaction_info.reactions.can_get_added_reactions to check whether added reactions can be received for the message.
         */
        protected int           $messageId,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string        $offset,
        /**
         * Type of the reactions to return; pass null to return all added reactions; reactionTypePaid isn't supported.
         */
        protected ?ReactionType $reactionType = null,
    ) {}

    public static function fromArray(array $array): GetMessageAddedReactions
    {
        return new static(
            chatId      : $array['chat_id'],
            limit       : $array['limit'],
            messageId   : $array['message_id'],
            offset      : $array['offset'],
            reactionType: (isset($array['reaction_type']) ? TdSchemaRegistry::fromArray($array['reaction_type']) : null),
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

    public function getReactionType(): ?ReactionType
    {
        return $this->reactionType;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setReactionType(?ReactionType $value): static
    {
        $this->reactionType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'limit'         => $this->limit,
            'message_id'    => $this->messageId,
            'offset'        => $this->offset,
            'reaction_type' => (null !== $this->reactionType ? $this->reactionType->jsonSerialize() : null),
        ];
    }
}

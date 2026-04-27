<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets reactions on a message; for bots only.
 */
class SetMessageReactions extends TdFunction
{
    public const string TYPE_NAME = 'setMessageReactions';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int   $chatId,
        /**
         * Pass true if the reactions are added with a big animation.
         */
        protected bool  $isBig,
        /**
         * Identifier of the message.
         */
        protected int   $messageId,
        /**
         * Types of the reaction to set; pass an empty list to remove the reactions.
         *
         * @var ReactionType[]
         */
        protected array $reactionTypes,
    ) {}

    public static function fromArray(array $array): SetMessageReactions
    {
        return new static(
            chatId       : $array['chat_id'],
            isBig        : $array['is_big'],
            messageId    : $array['message_id'],
            reactionTypes: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['reaction_types']),
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

    public function getReactionTypes(): array
    {
        return $this->reactionTypes;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsBig(bool $value): static
    {
        $this->isBig = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setReactionTypes(array $value): static
    {
        $this->reactionTypes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'is_big'         => $this->isBig,
            'message_id'     => $this->messageId,
            'reaction_types' => array_map(static fn($x) => $x->jsonSerialize(), $this->reactionTypes),
        ];
    }
}

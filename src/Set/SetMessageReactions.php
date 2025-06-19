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
    public const TYPE_NAME = 'setMessageReactions';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int   $chatId,
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
        /**
         * Pass true if the reactions are added with a big animation.
         */
        protected bool  $isBig
    ) {}

    public static function fromArray(array $array): SetMessageReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['reaction_types']),
            $array['is_big'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            array_map(fn($x) => $x->typeSerialize(), $this->reactionTypes),
            'is_big'     => $this->isBig,
        ];
    }
}

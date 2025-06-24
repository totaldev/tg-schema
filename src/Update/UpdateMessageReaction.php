<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * User changed its reactions on a message with public reactions; for bots only.
 */
class UpdateMessageReaction extends Update
{
    public const TYPE_NAME = 'updateMessageReaction';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Message identifier.
         */
        protected int           $messageId,
        /**
         * Identifier of the user or chat that changed reactions.
         */
        protected MessageSender $actorId,
        /**
         * Point in time (Unix timestamp) when the reactions were changed.
         */
        protected int           $date,
        /**
         * Old list of chosen reactions.
         *
         * @var ReactionType[]
         */
        protected array         $oldReactionTypes,
        /**
         * New list of chosen reactions.
         *
         * @var ReactionType[]
         */
        protected array         $newReactionTypes,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageReaction
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['actor_id']),
            $array['date'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['old_reaction_types']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['new_reaction_types']),
        );
    }

    public function getActorId(): MessageSender
    {
        return $this->actorId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getNewReactionTypes(): array
    {
        return $this->newReactionTypes;
    }

    public function getOldReactionTypes(): array
    {
        return $this->oldReactionTypes;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'actor_id'   => $this->actorId->typeSerialize(),
            'date'       => $this->date,
            array_map(static fn($x) => $x->typeSerialize(), $this->oldReactionTypes),
            array_map(static fn($x) => $x->typeSerialize(), $this->newReactionTypes),
        ];
    }
}

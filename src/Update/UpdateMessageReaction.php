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
    public const string TYPE_NAME = 'updateMessageReaction';

    public function __construct(
        /**
         * Identifier of the user or chat that changed reactions.
         */
        protected MessageSender $actorId,
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Point in time (Unix timestamp) when the reactions were changed.
         */
        protected int           $date,
        /**
         * Message identifier.
         */
        protected int           $messageId,
        /**
         * New list of chosen reactions.
         *
         * @var ReactionType[]
         */
        protected array         $newReactionTypes,
        /**
         * Old list of chosen reactions.
         *
         * @var ReactionType[]
         */
        protected array         $oldReactionTypes,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageReaction
    {
        return new static(
            actorId         : TdSchemaRegistry::fromArray($array['actor_id']),
            chatId          : $array['chat_id'],
            date            : $array['date'],
            messageId       : $array['message_id'],
            newReactionTypes: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['new_reaction_types']),
            oldReactionTypes: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['old_reaction_types']),
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

    public function setActorId(MessageSender $value): static
    {
        $this->actorId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setNewReactionTypes(array $value): static
    {
        $this->newReactionTypes = $value;

        return $this;
    }

    public function setOldReactionTypes(array $value): static
    {
        $this->oldReactionTypes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'actor_id'           => $this->actorId->jsonSerialize(),
            'chat_id'            => $this->chatId,
            'date'               => $this->date,
            'message_id'         => $this->messageId,
            'new_reaction_types' => array_map(static fn($x) => $x->jsonSerialize(), $this->newReactionTypes),
            'old_reaction_types' => array_map(static fn($x) => $x->jsonSerialize(), $this->oldReactionTypes),
        ];
    }
}

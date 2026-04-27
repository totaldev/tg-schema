<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Block\BlockList;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents interaction with a story.
 */
class StoryInteraction extends TdObject
{
    public const string TYPE_NAME = 'storyInteraction';

    public function __construct(
        /**
         * Identifier of the user or chat that made the interaction.
         */
        protected MessageSender        $actorId,
        /**
         * Block list to which the actor is added; may be null if none or for chat stories.
         */
        protected ?BlockList           $blockList,
        /**
         * Approximate point in time (Unix timestamp) when the interaction happened.
         */
        protected int                  $interactionDate,
        /**
         * Type of the interaction.
         */
        protected StoryInteractionType $type,
    ) {}

    public static function fromArray(array $array): StoryInteraction
    {
        return new static(
            actorId        : TdSchemaRegistry::fromArray($array['actor_id']),
            blockList      : (isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null),
            interactionDate: $array['interaction_date'],
            type           : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getActorId(): MessageSender
    {
        return $this->actorId;
    }

    public function getBlockList(): ?BlockList
    {
        return $this->blockList;
    }

    public function getInteractionDate(): int
    {
        return $this->interactionDate;
    }

    public function getType(): StoryInteractionType
    {
        return $this->type;
    }

    public function setActorId(MessageSender $value): static
    {
        $this->actorId = $value;

        return $this;
    }

    public function setBlockList(?BlockList $value): static
    {
        $this->blockList = $value;

        return $this;
    }

    public function setInteractionDate(int $value): static
    {
        $this->interactionDate = $value;

        return $this;
    }

    public function setType(StoryInteractionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'actor_id'         => $this->actorId->jsonSerialize(),
            'block_list'       => (null !== $this->blockList ? $this->blockList->jsonSerialize() : null),
            'interaction_date' => $this->interactionDate,
            'type'             => $this->type->jsonSerialize(),
        ];
    }
}

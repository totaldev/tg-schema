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
    public const TYPE_NAME = 'storyInteraction';

    public function __construct(
        /**
         * Identifier of the user or chat that made the interaction.
         */
        protected MessageSender        $actorId,
        /**
         * Approximate point in time (Unix timestamp) when the interaction happened.
         */
        protected int                  $interactionDate,
        /**
         * Block list to which the actor is added; may be null if none or for chat stories.
         */
        protected ?BlockList           $blockList,
        /**
         * Type of the interaction.
         */
        protected StoryInteractionType $type,
    ) {}

    public static function fromArray(array $array): StoryInteraction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['actor_id']),
            $array['interaction_date'],
            isset($array['block_list']) ? TdSchemaRegistry::fromArray($array['block_list']) : null,
            TdSchemaRegistry::fromArray($array['type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'actor_id'         => $this->actorId->typeSerialize(),
            'interaction_date' => $this->interactionDate,
            'block_list'       => (isset($this->blockList) ? $this->blockList : null),
            'type'             => $this->type->typeSerialize(),
        ];
    }
}

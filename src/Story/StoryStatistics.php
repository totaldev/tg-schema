<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about a story.
 */
class StoryStatistics extends TdObject
{
    public const TYPE_NAME = 'storyStatistics';

    public function __construct(
        /**
         * A graph containing number of story views and shares.
         */
        protected StatisticalGraph $storyInteractionGraph,
        /**
         * A graph containing number of story reactions.
         */
        protected StatisticalGraph $storyReactionGraph
    ) {}

    public static function fromArray(array $array): StoryStatistics
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story_interaction_graph']),
            TdSchemaRegistry::fromArray($array['story_reaction_graph']),
        );
    }

    public function getStoryInteractionGraph(): StatisticalGraph
    {
        return $this->storyInteractionGraph;
    }

    public function getStoryReactionGraph(): StatisticalGraph
    {
        return $this->storyReactionGraph;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'story_interaction_graph' => $this->storyInteractionGraph->typeSerialize(),
            'story_reaction_graph'    => $this->storyReactionGraph->typeSerialize(),
        ];
    }
}

<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about a message.
 */
class MessageStatistics extends TdObject
{
    public const string TYPE_NAME = 'messageStatistics';

    public function __construct(
        /**
         * A graph containing number of message views and shares.
         */
        protected StatisticalGraph $messageInteractionGraph,
        /**
         * A graph containing number of message reactions.
         */
        protected StatisticalGraph $messageReactionGraph,
    ) {}

    public static function fromArray(array $array): MessageStatistics
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message_interaction_graph']),
            TdSchemaRegistry::fromArray($array['message_reaction_graph']),
        );
    }

    public function getMessageInteractionGraph(): StatisticalGraph
    {
        return $this->messageInteractionGraph;
    }

    public function getMessageReactionGraph(): StatisticalGraph
    {
        return $this->messageReactionGraph;
    }

    public function setMessageInteractionGraph(StatisticalGraph $value): static
    {
        $this->messageInteractionGraph = $value;

        return $this;
    }

    public function setMessageReactionGraph(StatisticalGraph $value): static
    {
        $this->messageReactionGraph = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'message_interaction_graph' => $this->messageInteractionGraph->typeSerialize(),
            'message_reaction_graph'    => $this->messageReactionGraph->typeSerialize(),
        ];
    }
}

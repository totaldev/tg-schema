<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about a message
 */
class MessageStatistics extends TdObject
{
    public const TYPE_NAME = 'messageStatistics';

    /**
     * A graph containing number of message views and shares
     *
     * @var StatisticalGraph
     */
    protected StatisticalGraph $messageInteractionGraph;

    public function __construct(StatisticalGraph $messageInteractionGraph)
    {
        $this->messageInteractionGraph = $messageInteractionGraph;
    }

    public static function fromArray(array $array): MessageStatistics
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message_interaction_graph']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_interaction_graph' => $this->messageInteractionGraph->typeSerialize(),
        ];
    }

    public function getMessageInteractionGraph(): StatisticalGraph
    {
        return $this->messageInteractionGraph;
    }
}

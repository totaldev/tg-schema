<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains statistics about interactions with a message sent in the chat or a story posted on behalf of the chat.
 */
class ChatStatisticsInteractionInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsInteractionInfo';

    public function __construct(
        /**
         * Type of the object.
         */
        protected ChatStatisticsObjectType $objectType,
        /**
         * Number of times the object was viewed.
         */
        protected int                      $viewCount,
        /**
         * Number of times the object was forwarded.
         */
        protected int                      $forwardCount,
        /**
         * Number of times reactions were added to the object.
         */
        protected int                      $reactionCount,
    ) {}

    public static function fromArray(array $array): ChatStatisticsInteractionInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['object_type']),
            $array['view_count'],
            $array['forward_count'],
            $array['reaction_count'],
        );
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    public function getObjectType(): ChatStatisticsObjectType
    {
        return $this->objectType;
    }

    public function getReactionCount(): int
    {
        return $this->reactionCount;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'object_type'    => $this->objectType->typeSerialize(),
            'view_count'     => $this->viewCount,
            'forward_count'  => $this->forwardCount,
            'reaction_count' => $this->reactionCount,
        ];
    }
}

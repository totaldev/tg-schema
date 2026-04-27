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
    public const string TYPE_NAME = 'chatStatisticsInteractionInfo';

    public function __construct(
        /**
         * Number of times the object was forwarded.
         */
        protected int                      $forwardCount,
        /**
         * Type of the object.
         */
        protected ChatStatisticsObjectType $objectType,
        /**
         * Number of times reactions were added to the object.
         */
        protected int                      $reactionCount,
        /**
         * Number of times the object was viewed.
         */
        protected int                      $viewCount,
    ) {}

    public static function fromArray(array $array): ChatStatisticsInteractionInfo
    {
        return new static(
            forwardCount : $array['forward_count'],
            objectType   : TdSchemaRegistry::fromArray($array['object_type']),
            reactionCount: $array['reaction_count'],
            viewCount    : $array['view_count'],
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

    public function setForwardCount(int $value): static
    {
        $this->forwardCount = $value;

        return $this;
    }

    public function setObjectType(ChatStatisticsObjectType $value): static
    {
        $this->objectType = $value;

        return $this;
    }

    public function setReactionCount(int $value): static
    {
        $this->reactionCount = $value;

        return $this;
    }

    public function setViewCount(int $value): static
    {
        $this->viewCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'forward_count'  => $this->forwardCount,
            'object_type'    => $this->objectType->jsonSerialize(),
            'reaction_count' => $this->reactionCount,
            'view_count'     => $this->viewCount,
        ];
    }
}

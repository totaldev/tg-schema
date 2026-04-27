<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about interactions with a message.
 */
class MessageInteractionInfo extends TdObject
{
    public const string TYPE_NAME = 'messageInteractionInfo';

    public function __construct(
        /**
         * Number of times the message was forwarded.
         */
        protected int               $forwardCount,
        /**
         * The list of reactions or tags added to the message; may be null.
         */
        protected ?MessageReactions $reactions,
        /**
         * Information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself.
         */
        protected ?MessageReplyInfo $replyInfo,
        /**
         * Number of times the message was viewed.
         */
        protected int               $viewCount,
    ) {}

    public static function fromArray(array $array): MessageInteractionInfo
    {
        return new static(
            forwardCount: $array['forward_count'],
            reactions   : (isset($array['reactions']) ? TdSchemaRegistry::fromArray($array['reactions']) : null),
            replyInfo   : (isset($array['reply_info']) ? TdSchemaRegistry::fromArray($array['reply_info']) : null),
            viewCount   : $array['view_count'],
        );
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    public function getReactions(): ?MessageReactions
    {
        return $this->reactions;
    }

    public function getReplyInfo(): ?MessageReplyInfo
    {
        return $this->replyInfo;
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

    public function setReactions(?MessageReactions $value): static
    {
        $this->reactions = $value;

        return $this;
    }

    public function setReplyInfo(?MessageReplyInfo $value): static
    {
        $this->replyInfo = $value;

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
            '@type'         => static::TYPE_NAME,
            'forward_count' => $this->forwardCount,
            'reactions'     => (null !== $this->reactions ? $this->reactions->jsonSerialize() : null),
            'reply_info'    => (null !== $this->replyInfo ? $this->replyInfo->jsonSerialize() : null),
            'view_count'    => $this->viewCount,
        ];
    }
}

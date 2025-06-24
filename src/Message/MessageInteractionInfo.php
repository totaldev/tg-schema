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
    public const TYPE_NAME = 'messageInteractionInfo';

    public function __construct(
        /**
         * Number of times the message was viewed.
         */
        protected int               $viewCount,
        /**
         * Number of times the message was forwarded.
         */
        protected int               $forwardCount,
        /**
         * Information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself.
         */
        protected ?MessageReplyInfo $replyInfo,
        /**
         * The list of reactions or tags added to the message; may be null.
         */
        protected ?MessageReactions $reactions,
    ) {}

    public static function fromArray(array $array): MessageInteractionInfo
    {
        return new static(
            $array['view_count'],
            $array['forward_count'],
            isset($array['reply_info']) ? TdSchemaRegistry::fromArray($array['reply_info']) : null,
            isset($array['reactions']) ? TdSchemaRegistry::fromArray($array['reactions']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'view_count'    => $this->viewCount,
            'forward_count' => $this->forwardCount,
            'reply_info'    => $this->replyInfo ?? null,
            'reactions'     => $this->reactions ?? null,
        ];
    }
}
